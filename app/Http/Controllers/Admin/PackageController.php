<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Activity;
use App\Models\Currency;
use App\Models\PackageActivity;
use App\Models\PackageHeader;
use App\Models\PackageLine;
use App\Models\Freezone;
use App\Models\Attribute; 
use App\Models\AttributeOption;
use App\Models\PackageAttributesCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $currency = Currency::where('status',1)->get();
        $activities = Activity::where('status',1)->get();
        $token = Auth::user()->createToken('FreezoneToken')->plainTextToken;
        return view('admin.packages.create', compact('freezones', 'attributes', 'attributeOptions','currency','activities','token'));
    }


    // Store a newly created package in the database
    public function store(Request $request)
    {
        $request->validate([
            'freezone_id' => 'required|exists:freezones,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'currency' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'renewable_price' => 'required|numeric|min:0',
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
            'allowed_free_packages' => $request->input('activity_limit',0),
        ]);

        // Loop through the package lines and handle based on attribute_option_id
        foreach ($request->input('package_lines',[]) as $line) {
            if (empty($line['attribute_option_id'])) {
                // Store in package_attributes_cost if attribute_option_id is empty
                PackageAttributesCost::create([
                    'package_id' => $package->id,
                    'attribute_id' => $line['attribute_id'],
                    'allowed_free_qty' => $line['allowed_free_qty'],
                    'unit_price' => $line['unit_price'],
                    'per_unit' => 1, // Assuming a default value for per_unit
                ]);
            } else {
                // Otherwise, store in the package_lines table
                PackageLine::create([
                    'package_id' => $package->id,
                    'attribute_id' => $line['attribute_id'],
                    'attribute_option_id' => $line['attribute_option_id'],
                    'addon_cost' => $line['addon_cost'] ?? 0, // If addon_cost is nullable
                    'status' => 1,
                ]);
            }
        }
        return redirect()->route('package.index')->with('success', 'Package created successfully!');
    }


    // Show the form for editing a specific package
    public function edit($id)
    {
        // Fetch the package with related models using eager loading
        $package = PackageHeader::with(['packageLines', 'packageLines.attribute', 'packageLines.attributeOption','attributeCosts'])->findOrFail($id);
        // Fetch attributes, attribute options, currency, activities, and freezones
        $attributes = Attribute::where('status', 1)->get();
        $attributeOptions = AttributeOption::where('status', 1)->get();
        $currency = Currency::where('status', 1)->get();
        $activities = Activity::where('status', 1)->get();
        $package_activities = PackageActivity::where('package_id', $package->id)
            ->where('status', 1)
            ->get();

        $activityIds = $package_activities->isNotEmpty() ? $package_activities->pluck('activity_id') : collect();
        $selected_activities = Activity::where('status', 1)->whereIn('id', $activityIds)->get();

        // Fetch freezones
        $freezones = Freezone::all();

        return view('admin.packages.edit', compact('package', 'attributes', 'attributeOptions', 'freezones', 'currency', 'activities','selected_activities'));
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
                'currency' => 'required|string',
                'price' => 'required|numeric|min:0',
                'renewable_price' => 'required|numeric|min:0',
                'trending' => 'nullable|boolean',
            ]);

            // If validation passes, update the package
            $package->update([
                'title' => $request->title,
                'description' => $request->description,
                'freezone_id' => $request->freezone_id,
                'visa_package' => $request->visa_package,
                'price' => $request->price,
                'renewable_price' => $request->renewable_price,
                'currency' => $request->currency,
                'trending' => $request->trending ? true : false,
                'updated_by' => auth()->id(),
                'allowed_free_packages' => $request->input('activity_limit',0),
            ]);

            // Clear existing package lines
            $package->packageLines()->delete();
            $package->attributeCosts()->delete();

            // Loop through the package lines and handle based on attribute_option_id
            foreach ($request->input('package_lines', []) as $line) {
                if (empty($line['attribute_option_id'])) {
                    // Store in package_attributes_cost if attribute_option_id is empty
                    PackageAttributesCost::create([
                        'package_id' => $package->id,
                        'attribute_id' => $line['attribute_id'],
                        'allowed_free_qty' => $line['allowed_free_qty'] ?? 0, // New field handling
                        'unit_price' => $line['unit_price'] ?? 0, // New field handling
                        'per_unit' => 1, // Assuming a default value for per_unit
                    ]);
                } else {
                    // Otherwise, store in the package_lines table
                    PackageLine::create([
                        'package_id' => $package->id,
                        'attribute_id' => $line['attribute_id'],
                        'attribute_option_id' => $line['attribute_option_id'],
                        'addon_cost' => $line['addon_cost'] ?? 0, // If addon_cost is nullable
                        'status' => 1,
                    ]);
                }
            }

            return redirect()->route('package.index')->with('success', 'Package updated successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation failure
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
