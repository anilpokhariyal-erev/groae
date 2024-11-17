<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Setting;
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
            'show_in_calculator' => 'boolean',
            'allow_any' => 'boolean',
            'allow_multiple' => 'boolean',
        ]);

        if (Attribute::where('name', $validatedData['name'])
            ->exists()) {
            return redirect()->back()->withErrors(['name' => 'The combination of name and label already exists.'])->withInput();
        }

        Attribute::create($validatedData);

        return redirect()->route('attributes.index')->with('success', 'Attribute created successfully.');
    }

    /**
     * Show the form for editing the specified attribute.
     */
    public function edit($id)
    {
        $attribute = Attribute::findOrFail($id);
        $attribute_options = AttributeOption::where('attribute_id', $id)->get();
        return view('admin.attributes.edit', compact('attribute', 'attribute_options'));
    }

    /**
     * Update the specified attribute in storage.
     */
    public function update(Request $request, $id)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);
        if ($request->has('allow_any')){
            $validatedData['allow_any'] = $request->input('allow_any');
        }
        
        $validatedData['allow_multiple'] = $request->input('allow_multiple',0);

        $validatedData['show_in_calculator'] = $request->has('show_in_calculator');


        // Find the existing attribute
        $attribute = Attribute::findOrFail($id);

        // Check if the attribute is already in use in a package
        if ($attribute->countInPackage() && $validatedData['status'] == false) {
            return redirect()->back()->withErrors(['name' => 'The attribute is already used in a package.'])->withInput();
        }

        // Update the attribute with validated data
        $attribute->update($validatedData);

        // Remove old attribute options
        $attribute->options()->update(['status' => 0]);

        // Insert or update attribute options
        foreach ($request->input('attribute_options', []) as $option) {
            $attribute_option = AttributeOption::where('attribute_id', $id)->where('value', $option)->first();
            if (!$attribute_option) {
                $attribute_option = new AttributeOption();
                $attribute_option->attribute_id = $id;
                $attribute_option->value = $option;
            }
            $attribute_option->status = 1;
            $attribute_option->save();
        }

        // Redirect back with success message
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


    /**
     * AI Search Filter Manager
     */
    public function aiSearchFilters()
    {
        $attributes = Attribute::where('status', 1)->get();

        $selectedAttributes = Attribute::where('is_ai_search_enabled', 1)
                                    ->orderBy('ai_filter_display_order') // Order by the new column
                                    ->pluck('id')
                                    ->toArray();

        $minSetting = Setting::where('section_key', 'manage_ai_fields_limit')->where('title', 'min')->first();
        $maxSetting = Setting::where('section_key', 'manage_ai_fields_limit')->where('title', 'max')->first();

        $minValue = $minSetting ? $minSetting->value : 0;
        $maxValue = $maxSetting ? $maxSetting->value : 10;

        return view('admin.attributes.ai_search_filters', compact('attributes', 'minValue', 'maxValue', 'selectedAttributes'));
    }



    /**
     * AI store the attributes to be displayed on front end
     */
    public function storeAiSearchFilters(Request $request)
    {
        $request->validate([
            'attributes' => 'required|array|min:1', // Ensure at least one attribute is selected
            'attributes.*' => 'exists:attributes,id',
        ]);

        try {
            // Remove all selected search filters
            Attribute::where('status', 1)->update(['is_ai_search_enabled' => 0]);

            // Store the filters selected in the database with their order
            foreach ($request->get("attributes") as $index => $attributeId) {
                // Check if attributeId exists to avoid undefined key error
                if (isset($attributeId)) {
                    Attribute::where('id', $attributeId)->update([
                        'is_ai_search_enabled' => 1,
                        'ai_filter_display_order' => $index + 1 // Store the order (1-based index)
                    ]);
                }
            }

            return redirect()->back()->with('success', 'AI Search Filters saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }



    public function getSuggestions(Request $request)
    {
        $query = $request->input('query');
        $type = $request->input('type');

        if ($type === 'name') {
            $attributes = Attribute::where('name', 'LIKE', "%$query%")->pluck('name')->toArray();
            return response()->json($attributes);
        } elseif ($type === 'label') {
            $attributes = Attribute::where('label', 'LIKE', "%$query%")->pluck('label')->toArray();
            return response()->json($attributes);
        }

        return response()->json([]);
    }

    public function disabled($id)
    {
        $attribute = Attribute::findOrFail($id);
        if ($attribute->countInPackage()) {
            return redirect()->back()->withErrors(['status' => 'The attribute is already use in package.'])->withInput();
        }
        $attribute->status = 0;
        $attribute->save();

        return redirect()->route('attributes.index')->with('success', 'Attribute disabled successfully.');
    }

    public function enabled($id)
    {
        $attribute = Attribute::findOrFail($id);
        $attribute->status = 1;
        $attribute->save();

        return redirect()->route('attributes.index')->with('success', 'Attribute enabled successfully.');
    }


}
