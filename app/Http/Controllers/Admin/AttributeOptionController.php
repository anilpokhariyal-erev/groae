<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\PackageLine;
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
            'description' => 'nullable|string|max:255',
        ]);
        if (AttributeOption::where('attribute_id', $validatedData['attribute_id'])
            ->where('value', $validatedData['value'])
            ->exists()) {
            return redirect()->back()->withErrors(['value' => 'The combination of name and value already exists.'])->withInput();
        }

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
        // Validate the request
        $validatedData = $request->validate([
            'attribute_id' => 'required|exists:attributes,id',
            'value' => 'required|string|max:255',
            'status' => 'required|boolean',
            'description' => 'nullable|string|max:255',
        ]);

        $attributeOption = AttributeOption::findOrFail($id);

        // Check if the attribute option is used in any packages
        // if ($attributeOption->countInPackage()) {
        //     return redirect()->back()->withErrors(['status' => 'The attribute option is already used in a package.'])->withInput();
        // }

        // Check for duplicate attribute option with the same value and status
        $duplicate = AttributeOption::where('attribute_id', $validatedData['attribute_id'])
            ->where('value', $validatedData['value'])
            ->where('status', $validatedData['status'])
            ->where('id', '!=', $id) // Exclude current record
            ->exists();

        if ($duplicate) {
            return redirect()->back()->withErrors(['value' => 'The combination of attribute name and value already exists.'])->withInput();
        }

        // Update the attribute option
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
         $options = AttributeOption::where('attribute_id', $attributeId)->where('status',1)->get();
 
         return response()->json(['options' => $options]);
     }

    public function getSuggestions(Request $request)
    {
        $query = $request->query('query');

        $suggestions = AttributeOption::where('value', 'like', '%' . $query . '%')
            ->pluck('value')
            ->take(5); // Limit to 5 suggestions

        return response()->json($suggestions);
    }

    public function disabled($id)
    {
        $attribute = AttributeOption::findOrFail($id);
        if ($attribute->countInPackage()) {
            return redirect()->back()->withErrors(['name' => 'The attribute option is already used in a package.'])->withInput();
        }
        $attribute->status = 0;
        $attribute->save();

        return redirect()->route('admin.attribute-options.index')->with('success', 'Attribute disabled successfully.');
    }
    public function enabled($id)
    {
        $attribute = AttributeOption::findOrFail($id);
        $attribute->status = 1;
        $attribute->save();

        return redirect()->route('admin.attribute-options.index')->with('success', 'Attribute enabled successfully.');
    }

}
