<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    // Ensure only authorized users can access the controller methods
    public function __construct()
    {
        $this->middleware('role_or_permission:view-attributes');
    }

    /**
     * Display a listing of the attributes.
     */
    public function index()
    {
        // Fetch all attributes and pass them to the view
        $attributes = Attribute::with('options')->get();

        return view('admin.attributes.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new attribute.
     */
    public function create()
    {
        return view('admin.attributes.create');
    }

    /**
     * Store a newly created attribute in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        Attribute::create($validatedData);

        return redirect()->route('attributes.index')->with('success', 'Attribute created successfully.');
    }

    /**
     * Show the form for editing the specified attribute.
     */
    public function edit($id)
    {
        $attribute = Attribute::findOrFail($id);

        return view('admin.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified attribute in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $attribute = Attribute::findOrFail($id);
        $attribute->update($validatedData);

        return redirect()->route('attributes.index')->with('success', 'Attribute updated successfully.');
    }

    /**
     * Remove the specified attribute from storage.
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->route('attributes.index')->with('success', 'Attribute deleted successfully.');
    }

    
}
