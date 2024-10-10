<?php

namespace App\Http\Controllers\Admin;

use App\Models\VisaType;
use App\Models\Freezone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaTypeController extends Controller
{
    // Authorization Middleware
    public function __construct()
    {
        $this->middleware('role_or_permission:view-visa-types');
    }

    /**
     * Display a listing of visa types.
     */
    public function index()
    {
        $visaTypes = VisaType::with('freezone')->get();

        return view('admin.visa_types.index', compact('visaTypes'));
    }

    /**
     * Show the form for creating a new visa type.
     */
    public function create()
    {
        $freezones = Freezone::all();
        return view('admin.visa_types.create', compact('freezones'));
    }

    /**
     * Store a newly created visa type in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'freezone_id' => 'required|exists:freezones,id', // Ensure freezone_id exists in the FreeZones table
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0', // Ensure price is a valid numeric value
            'description' => 'nullable|string', // Description can be null
        ]);
    
        // Create a new VisaType instance and store it
        VisaType::create([
            'freezone_id' => $validatedData['freezone_id'],
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'] ?? null, // If description is null, default to null
        ]);
    
        // Redirect back with a success message
        return redirect()->route('visa-type.index')->with('success', 'Visa Type created successfully!');
    }
    
    /**
     * Show the form for editing the specified visa type.
     */
    public function edit($id)
    {
        $visaType = VisaType::findOrFail($id);
        $freezones = Freezone::all();

        return view('admin.visa_types.edit', compact('visaType', 'freezones'));
    }

    /**
     * Update the specified visa type in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'freezone_id' => 'required|exists:freezones,id', // Ensure freezone_id exists in the FreeZones table
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0', // Ensure price is a valid numeric value
            'description' => 'nullable|string', // Description can be null
        ]);
    
        // Find the existing VisaType by ID
        $visaType = VisaType::findOrFail($id);
    
        // Update the VisaType with validated data
        $visaType->update([
            'freezone_id' => $validatedData['freezone_id'],
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'] ?? null, // If description is null, default to null
        ]);
    
        // Redirect back with a success message
        return redirect()->route('visa-type.index')->with('success', 'Visa Type updated successfully!');
    }    

    /**
     * Remove the specified visa type from storage.
     */
    public function destroy(VisaType $visaType)
    {
        $visaType->delete();
        return redirect()->route('visa-type.index')->with('success', 'Visa Type deleted successfully.');
    }
}
