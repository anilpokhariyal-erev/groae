<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisaAddOn;
use App\Models\Freezone;

class VisaAddOnController extends Controller
{
    // Authorization Middleware
    public function __construct()
    {
        $this->middleware('role_or_permission:view-visa-add-ons');
    }

    /**
     * Display a listing of visa add-ons.
     */
    public function index()
    {
        $visaAddOns = VisaAddOn::with('freezone')->get();

        return view('admin.visa_add_ons.index', compact('visaAddOns'));
    }

    /**
     * Show the form for creating a new visa add-on.
     */
    public function create()
    {
        $freezones = Freezone::all();
        return view('admin.visa_add_ons.create', compact('freezones'));
    }

    /**
     * Store a newly created visa add-on in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'freezone_id' => 'required|exists:freezones,id', // Ensure freezone_id exists in the Freezones table
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0', // Ensure price is a valid numeric value
            'description' => 'nullable|string', // Description can be null
        ]);

        // Create a new VisaAddOn instance and store it
        VisaAddOn::create([
            'freezone_id' => $validatedData['freezone_id'],
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'] ?? null, // If description is null, default to null
        ]);

        // Redirect back with a success message
        return redirect()->route('visa-add-on.index')->with('success', 'Visa Add-On created successfully!');
    }

    /**
     * Show the form for editing the specified visa add-on.
     */
    public function edit($id)
    {
        $visaAddOn = VisaAddOn::findOrFail($id);
        $freezones = Freezone::all();

        return view('admin.visa_add_ons.edit', compact('visaAddOn', 'freezones'));
    }

    /**
     * Update the specified visa add-on in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'freezone_id' => 'required|exists:freezones,id', // Ensure freezone_id exists in the Freezones table
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0', // Ensure price is a valid numeric value
            'description' => 'nullable|string', // Description can be null
        ]);

        // Find the existing VisaAddOn by ID
        $visaAddOn = VisaAddOn::findOrFail($id);

        // Update the VisaAddOn with validated data
        $visaAddOn->update([
            'freezone_id' => $validatedData['freezone_id'],
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'] ?? null, // If description is null, default to null
        ]);

        // Redirect back with a success message
        return redirect()->route('visa-add-on.index')->with('success', 'Visa Add-On updated successfully!');
    }

    /**
     * Remove the specified visa add-on from storage.
     */
    public function destroy(VisaAddOn $visaAddOn)
    {
        $visaAddOn->delete();
        return redirect()->route('visa-add-on.index')->with('success', 'Visa Add-On deleted successfully.');
    }
}
