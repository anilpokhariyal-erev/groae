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
        $currency = Currency::where('status',1)->get();
        $activities = Activity::where('status',1)->get();
        return view('admin.packages.create', compact('freezones', 'attributes', 'attributeOptions','currency','activities'));
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
            'package_lines' => 'required|array',
            'package_lines.*.attribute_id' => 'required|exists:attributes,id',
            'package_lines.*.attribute_option_id' => 'required|exists:attribute_options,id',
            'package_lines.*.addon_cost' => 'required|numeric|min:0',
            'visa_package' => 'required|integer|min:0|max:99',
            'activity_limit' => 'nullable|integer|min:1',
            'free_activities' => 'required_if:activity_limit,>,0|array',
        ]);

        $activity_limit = 0;

        // Determine if trending checkbox is checked
        $isTrending = $request->has('trending') ? 1 : 0;
        if ($request->has('free_activities')) {
            $activities = array_filter($request->free_activities, function ($activityId) {
                return !is_null($activityId) && $activityId !== '';
            });
            $activity_limit =$request->input('activity_limit');
        }


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
            'visa_package'=>$request->visa_package,
            'allowed_free_packages' => $activity_limit
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

        if ($request->has('free_activities')) {
            $activities = array_filter($request->free_activities, function ($activityId) {
                return !is_null($activityId) && $activityId !== '';
            });
            foreach ($activities as $activityId) {
                PackageActivity::create([
                    'package_id' => $package->id,
                    'activity_id' => $activityId,
                    'price' => 0.00, // Assuming free activities have a price of 0
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
        $package = PackageHeader::with(['packageLines', 'packageLines.attribute', 'packageLines.attributeOption'])->findOrFail($id);

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
                'price' => 'required|numeric|min:0',
                'trending' => 'nullable|boolean', // Validate trending as a boolean
                'currency' => 'required|string',
                'package_lines' => 'array',
                'package_lines.*.attribute_id' => 'required|exists:attributes,id',
                'package_lines.*.attribute_option_id' => 'required|exists:attribute_options,id',
                'package_lines.*.addon_cost' => 'required|numeric|min:0',
                'visa_package' => 'required|integer|min:0|max:99',
            ]);

            $activity_limit = 0;
            if ($request->has('free_activities')) {
                $activities = array_filter($request->free_activities, function ($activityId) {
                    return !is_null($activityId) && $activityId !== '';
                });
                $activity_limit =$request->input('activity_limit');
            }


            // If validation passes, update the package
            $package->update([
                'title' => $request->title,
                'description' => $request->description,
                'freezone_id' => $request->freezone_id,
                'visa_package' => $request->visa_package,
                'price' => $request->price,
                'currency'=> $request->currency,
                'trending' => $request->trending ? true : false, // Set trending based on checkbox
                'updated_by' => auth()->id(),
                'allowed_free_packages' => $activity_limit
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

            if ($request->has('free_activities')) {
                // Get existing package activities
                $package_activities = PackageActivity::where('package_id', $package->id)->get();
                $activityIds = $package_activities->isNotEmpty() ? $package_activities->pluck('activity_id')->toArray() :Array();

                // Create new activities if they don't exist
                foreach ($activities as $activityId) {
                    if (!in_array($activityId, $activityIds)) {
                        PackageActivity::create([
                            'package_id' => $package->id,
                            'activity_id' => $activityId,
                            'price' => 0.00, // Assuming free activities have a price of 0
                            'status' => 1,
                        ]);
                    } else {
                        // If the activity already exists, set status to 1 (active)
                        PackageActivity::where('package_id', $package->id)
                            ->where('activity_id', $activityId)
                            ->update(['status' => 1]);
                    }
                }

                // Update status of existing activities not in the new list
                PackageActivity::where('package_id', $package->id)
                    ->whereNotIn('activity_id', $activities)
                    ->update(['status' => 0]); // Mark as inactive
            } else {
                // If no free activities were provided, mark all as inactive
                PackageActivity::where('package_id', $package->id)->update(['status' => 0]);
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
