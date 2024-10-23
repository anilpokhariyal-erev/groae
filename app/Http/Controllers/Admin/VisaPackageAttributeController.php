<?php

namespace App\Http\Controllers\Admin;

use App\Models\VisaPackageAttribute;
use App\Models\Freezone;
use App\Models\VisaPackageAttributeHeader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaPackageAttributeController extends Controller
{
    // Authorization Middleware
    public function __construct()
    {
        $this->middleware('role_or_permission:view-visa-package-attributes');
    }

    /**
     * Display a listing of visa package attributes.
     */
    public function index()
    {
        $visaPackageAttributes = VisaPackageAttribute::with('freezone', 'attribute_header')->get();

        return view('admin.visa-package-attributes.index', compact('visaPackageAttributes'));
    }

    /**
     * Show the form for creating a new visa package attribute.
     */
    public function create()
    {
        $freezones = Freezone::all();
        $attributeHeaders = VisaPackageAttributeHeader::all();
        return view('admin.visa-package-attributes.create', compact('freezones', 'attributeHeaders'));
    }

    /**
     * Store a newly created visa package attribute in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'freezone_id' => 'required|exists:freezones,id',
            'attribute_header_id' => 'required|exists:visa_package_attribute_header,id',
            'price' => 'required|numeric|min:0',
            'value' => 'required|string|max:50',
            'description' => 'nullable|string',
        ]);

        // Create a new VisaPackageAttribute instance and store it
        VisaPackageAttribute::create([
            'freezone_id' => $validatedData['freezone_id'],
            'attribute_header_id' => $validatedData['attribute_header_id'],
            'price' => $validatedData['price'],
            'value' => $validatedData['value'] ?? '',
            'description' => $validatedData['description'] ?? null,
        ]);

        // Redirect back with a success message
        return redirect()->route('visa-package-attributes.index')->with('success', 'Visa Package Attribute created successfully!');
    }

    /**
     * Show the form for editing the specified visa package attribute.
     */
    public function edit($id)
    {
        $visaPackageAttribute = VisaPackageAttribute::findOrFail($id);
        $freezones = Freezone::all();
        $attributeHeaders = VisaPackageAttributeHeader::all();

        return view('admin.visa-package-attributes.edit', compact('visaPackageAttribute', 'freezones', 'attributeHeaders'));
    }

    /**
     * Update the specified visa package attribute in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'freezone_id' => 'required|exists:freezones,id', // Ensure freezone_id exists in the FreeZones table
            'attribute_header_id' => 'required|exists:visa_package_attribute_header,id', // Ensure attribute_header_id exists
            'price' => 'required|numeric|min:0', // Ensure price is a valid numeric value
            'description' => 'nullable|string', // Description can be null
        ]);

        // Find the existing VisaPackageAttribute by ID
        $visaPackageAttribute = VisaPackageAttribute::findOrFail($id);

        // Update the VisaPackageAttribute with validated data
        $visaPackageAttribute->update([
            'freezone_id' => $validatedData['freezone_id'],
            'attribute_header_id' => $validatedData['attribute_header_id'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'] ?? null, // If description is null, default to null
        ]);

        // Redirect back with a success message
        return redirect()->route('visa-package-attributes.index')->with('success', 'Visa Package Attribute updated successfully!');
    }

    /**
     * Remove the specified visa package attribute from storage.
     */
    public function destroy(VisaPackageAttribute $visaPackageAttribute)
    {
        $visaPackageAttribute->delete();
        return redirect()->route('visa-package-attributes.index')->with('success', 'Visa Package Attribute deleted successfully.');
    }
}
