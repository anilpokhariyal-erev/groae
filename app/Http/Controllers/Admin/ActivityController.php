<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\ActivityGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.activities.create', compact('activityGroups'));
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
            'activity_group_id' => 'required|exists:activity_groups,id'
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
        return view('admin.activities.edit', compact('activityGroups', 'activity'));
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
}
