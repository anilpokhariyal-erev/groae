<?php

namespace App\Http\Controllers\Admin;

use App\Models\VisaPackageAttributeHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\VisaPackageAttributeController;

class VisaPackageAttributeHeaderController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $visaPackageAttributeHeaders = VisaPackageAttributeHeader::all();
        return view('admin.visa-package-attribute-headers.index', compact('visaPackageAttributeHeaders'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin.visa-package-attribute-headers.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->route('visa-package-attribute-headers.create')
                ->withErrors($validator)
                ->withInput();
        }

        VisaPackageAttributeHeader::create($request->all());

        return redirect()->route('visa-package-attribute-headers.index')->with('success', 'Visa Package Attribute Header created successfully.');
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $visaPackageAttributeHeader = VisaPackageAttributeHeader::findOrFail($id);
        return view('admin.visa-package-attribute-headers.edit', compact('visaPackageAttributeHeader'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->route('visa-package-attribute-headers.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $header = VisaPackageAttributeHeader::findOrFail($id);
        $header->update($request->all());

        return redirect()->route('visa-package-attribute-headers.index')->with('success', 'Visa Package Attribute Header updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $header = VisaPackageAttributeHeader::findOrFail($id);
        $header->update(['status' => 0]);

        // Call the destroyByHeader function with the header ID
        (new VisaPackageAttributeController())->destroyByHeader($header->id);

        return redirect()->route('visa-package-attribute-headers.index')->with('success', 'Visa Package Attribute Header and associated attributes deleted successfully.');
    }

}
