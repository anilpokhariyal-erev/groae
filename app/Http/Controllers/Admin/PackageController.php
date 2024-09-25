<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\PackageHeader;
use App\Models\PackageLine;
use App\Models\Freezone;
use App\Models\Attribute; 
use App\Models\AttributeOption;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Display a list of packages
    public function index()
    {
        $packages = PackageHeader::with('freezone')->get();
        return view('admin.packages.index', compact('packages'));
    }

    // Show the form for creating a new package
    public function create()
    {
        $freezones = Freezone::all();
        $attributes = Attribute::where('status',1)->get(); // Fetch attributes
        $attributeOptions = AttributeOption::where('status',1)->get(); // Fetch attribute options
    
        return view('admin.packages.create', compact('freezones', 'attributes', 'attributeOptions'));
    }


    // Store a newly created package in the database
    public function store(Request $request)
    {
        $request->validate([
            'freezone_id' => 'required|exists:freezones,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'package_lines' => 'required|array',
            'package_lines.*.attribute_id' => 'required|exists:attributes,id',
            'package_lines.*.attribute_option_id' => 'required|exists:attribute_options,id',
            'package_lines.*.addon_cost' => 'required|numeric|min:0',
        ]);

        // Determine if trending checkbox is checked
        $isTrending = $request->has('trending') ? 1 : 0;

        // Create the package header
        $package = PackageHeader::create([
            'title' => $request->title,
            'description' => $request->description,
            'freezone_id' => $request->freezone_id,
            'price' => $request->price,
            'renewable_price' => $request->renewable_price,
            'currency' => $request->currency,
            'status' => 1,
            'trending' => $isTrending,  // Save the trending value
            'updated_by' => auth()->id(),
        ]);

        // Loop through the package lines and create each PackageLine
        foreach ($request->package_lines as $line) {
            PackageLine::create([
                'package_id' => $package->id,
                'attribute_id' => $line['attribute_id'],
                'attribute_option_id' => $line['attribute_option_id'],
                'addon_cost' => $line['addon_cost'],
                'status' => 1,
            ]);
        }

        return redirect()->route('package.index')->with('success', 'Package created successfully!');
    }

    // Show the form for editing a specific package
    public function edit($id)
    {
        // Fetch the package with package lines
        $package = PackageHeader::with('packageLines')->findOrFail($id);

        // Fetch all attributes and their options
        $attributes = Attribute::where('status',1)->get(); // Fetch attributes
        $attributeOptions = AttributeOption::where('status',1)->get(); // Fetch attribute options

        // Fetch freezones if required
        $freezones = Freezone::all();

        return view('admin.packages.edit', compact('package', 'attributes', 'attributeOptions', 'freezones'));
    }


    // Update the specified package in the database
    public function update(Request $request, PackageHeader $package)
    {
        // Attempt to validate input
        try {
            $request->validate([
                'freezone_id' => 'required|exists:freezones,id',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'trending' => 'nullable|boolean', // Validate trending as a boolean
                'package_lines' => 'array',
                'package_lines.*.attribute_id' => 'required|exists:attributes,id',
                'package_lines.*.attribute_option_id' => 'required|exists:attribute_options,id',
                'package_lines.*.addon_cost' => 'required|numeric|min:0',
            ]);

            // If validation passes, update the package
            $package->update([
                'title' => $request->title,
                'description' => $request->description,
                'freezone_id' => $request->freezone_id,
                'price' => $request->price,
                'trending' => $request->trending ? true : false, // Set trending based on checkbox
                'updated_by' => auth()->id(),
            ]);

            // Update package lines
            $package->packageLines()->delete(); // Clear existing lines if necessary

            foreach ($request->package_lines as $line) {
                $package->packageLines()->create([
                    'attribute_id' => $line['attribute_id'],
                    'attribute_option_id' => $line['attribute_option_id'],
                    'addon_cost' => $line['addon_cost'],
                ]);
            }

            return redirect()->route('package.index')->with('success', 'Package updated successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation failure
            // You can log the error or customize the response here
            return redirect()->back()
                ->withErrors($e->validator) // Send back the validation errors
                ->withInput(); // Retain the old input
        }
    }




    // Delete the specified package from the database
    public function destroy(PackageHeader $package)
    {
        // First, delete associated package lines
        $package->packageLines()->delete();
    
        // Then, delete the package header itself
        $package->delete();
    
        return redirect()->route('package.index')->with('success', 'Package and associated package attributes deleted successfully!');
    }

    public function disabled($id)
    {
        $package = PackageHeader::findOrFail($id);
        $package->status = 0;
        $package->save();

        return redirect()->route('package.index')->with('success', 'Package disabled successfully!');
    }
    public function enabled($id)
    {
        $package = PackageHeader::findOrFail($id);
        $package->status = 1;
        $package->save();

        return redirect()->route('package.index')->with('success', 'Package enabled successfully!');
    }

}
