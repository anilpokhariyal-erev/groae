<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\ActivityGroup;
use App\Models\Freezone;
use App\Models\License;
use App\Models\PackageActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    // Authorization Middleware
    public function __construct()
    {
        $this->middleware('role_or_permission:view-activities');
    }

    /**
     * Display a listing of activities.
     */
    public function index()
    {
        $activities = Activity::with('activity_group', 'freezone')->get();
        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new activity.
     */
    public function create()
    {
        $activityGroups = ActivityGroup::all();
        $token = Auth::user()->createToken('ActivityToken')->plainTextToken;
        return view('admin.activities.create', compact('activityGroups','token'));
    }

    /**
     * Store a newly created activity in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'activity_group_id' => 'required|exists:activity_groups,id',
            'licence_id' => 'required|exists:licenses,id',
            'code' => 'required|string|max:20|unique:activities,code',
        ]);

        // Retrieve the activity group to get the freezone_id
        $activityGroup = ActivityGroup::find($validatedData['activity_group_id']);
        
        // Create the activity with the additional freezone_id
        $activity = Activity::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'activity_group_id' => $validatedData['activity_group_id'],
            'freezone_id' => $activityGroup->freezone_id,
            'licence_id' => $validatedData['licence_id'],
            'code' => $validatedData['code'],
        ]);

        return redirect()->route('activity.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Show the form for editing the specified activity.
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id); // Fetch the activity using id
        $activityGroups = ActivityGroup::all(); // Fetch all activity groups
        $token = Auth::user()->createToken('ActivityToken')->plainTextToken;
        $license = License::findOrFail($activity->licence_id);
        return view('admin.activities.edit', compact('activityGroups', 'activity', 'license','token'));
    }    

    /**
     * Update the specified activity in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'activity_group_id' => 'required|exists:activity_groups,id',
            'licence_id' => 'required|exists:licenses,id',
            'code' => 'required|string|max:20|unique:activities,code,'.$id,
        ]);
    
        // Find the activity by id
        $activity = Activity::findOrFail($id);
        
        $activity->freezone_id = ActivityGroup::find($validatedData['activity_group_id'])->freezone_id;
    
        $activity->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'activity_group_id' => $validatedData['activity_group_id'],
            'freezone_id' => $activity->freezone_id,
            'licence_id' => $validatedData['licence_id'],
            'code' => $validatedData['code'],
        ]);
    
        return redirect()->route('activity.index')->with('success', 'Activity updated successfully.');
    }

    /**
     * Remove the specified activity from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activity.index')->with('success', 'Activity deleted successfully.');
    }

    public function savePackageActivities(Request $request)
    {
        $activities = $request->input('activities'); // Retrieve activities from the request
        $selected_activities = $request->input('selected_activities');
        $package_id = $request->input('package_id');

        try {
            if (empty($activities)) {
                return response()->json(['message' => 'No activities to update'], 400);
            }

            DB::transaction(function () use ($activities, $selected_activities, $package_id) {
                foreach ($activities as $activityData) {
                    $activity = PackageActivity::find($activityData['activityId']);
                    if ($activity) {
                        $activity->update(['price' => $activityData['price'],]);
                    }
                }
                // Update all activities in the package to disallow free access
                PackageActivity::where('package_id', $package_id)->update(['allowed_free' => 0]);

                // Allow free access only to selected activities
                PackageActivity::whereIn('id', $selected_activities)->update(['allowed_free' => 1]);
            });


            return response()->json(['message' => 'Activities updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update activities',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function getActivityGroupLicenses(string $activity_group_id) {
        $activity_group = ActivityGroup::findOrFail($activity_group_id);
        $selected_license = License::find($activity_group->licence_id); // Optional if no license

        $licenses = License::where('freezone_id', $activity_group->freezone_id)->get();

        return response()->json([
            'selected_license' => $selected_license,
            'licenses' => $licenses,
        ]);
    }
    public function getActivityGroupFreezoneLicenses(string $freezoneId) {
        $freezone = Freezone::findOrFail($freezoneId);
        $licenses = License::where('freezone_id', $freezone->id)->get();
        return response()->json([
            'licenses' => $licenses,
        ]);
    }

}
