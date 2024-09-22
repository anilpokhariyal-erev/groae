<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Http\Request;

class AttributeOptionController extends Controller
{
    // Ensure only authorized users can access the controller methods
    public function __construct()
    {
        $this->middleware('role_or_permission:view-attribute-options');
    }

    /**
     * Display a listing of the attribute options.
     */
    public function index()
    {
        // Fetch all attribute options and pass them to the view
        $attributeOptions = AttributeOption::with('attribute')->get();

        return view('admin.attribute-options.index', compact('attributeOptions'));
    }

    /**
     * Show the form for creating a new attribute option.
     */
    public function create()
    {
        // Fetch all attributes to populate the dropdown
        $attributes = Attribute::all();

        return view('admin.attribute-options.create', compact('attributes'));
    }

    /**
     * Store a newly created attribute option in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'attribute_id' => 'required|exists:attributes,id',
            'value' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        AttributeOption::create($validatedData);

        return redirect()->route('admin.attribute-options.index')->with('success', 'Attribute Option created successfully.');
    }

    /**
     * Show the form for editing the specified attribute option.
     */
    public function edit($id)
    {
        $attributeOption = AttributeOption::findOrFail($id);
        $attributes = Attribute::all(); // Fetch all attributes for dropdown

        return view('admin.attribute-options.edit', compact('attributeOption', 'attributes'));
    }

    /**
     * Update the specified attribute option in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'attribute_id' => 'required|exists:attributes,id',
            'value' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $attributeOption = AttributeOption::findOrFail($id);
        $attributeOption->update($validatedData);

        return redirect()->route('admin.attribute-options.index')->with('success', 'Attribute Option updated successfully.');
    }

    /**
     * Remove the specified attribute option from storage.
     */
    public function destroy($id)
    {
        $attributeOption = AttributeOption::findOrFail($id);
        $attributeOption->delete();

        return redirect()->route('admin.attribute-options.index')->with('success', 'Attribute Option deleted successfully.');
    }

    
    /**
     * Get attribute options
     */

     public function getAttributeOptions($attributeId)
     {
         $options = AttributeOption::where('attribute_id', $attributeId)->get();
 
         return response()->json(['options' => $options]);
     }
}
