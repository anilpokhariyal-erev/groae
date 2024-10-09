<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Freezone;
use App\Models\ActivityGroup;
use App\Http\Controllers\Controller;

class ActivityGroupController extends Controller
{
    // Authorization Middleware
    public function __construct()
    {
        $this->middleware('role_or_permission:view-activity-groups');
    }

    /**
     * Display a listing of activity groups.
     */
    public function index()
    {
        $activityGroups = ActivityGroup::with('activities', 'freezone')->get();
        return view('admin.activity-groups.index', compact('activityGroups'));
    }

    /**
     * Show the form for creating a new activity group.
     */
    public function create()
    {

        $freezones = Freezone::all();
        return view('admin.activity-groups.create', compact('freezones'));
    }

    /**
     * Store a newly created activity group in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'freezone_id' => 'required|exists:freezones,id',
        ]);

        ActivityGroup::create($validatedData);

        return redirect()->route('activity-group.index')->with('success', 'Activity Group created successfully.');
    }

    /**
     * Show the form for editing the specified activity group.
     */
    public function edit($id){
         $activityGroup = ActivityGroup::where('id', $id)->first();
         $freezones = Freezone::all();
        return view('admin.activity-groups.edit', compact('freezones', 'activityGroup'));
    }

    /**
     * Update the specified activity group in storage.
     */
    public function update(Request $request, ActivityGroup $activityGroup)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'freezone_id' => 'required|exists:freezones,id',
        ]);

        // Update the activity group with the validated data
        $activityGroup->update($validatedData);

        // Redirect back to the activity group index with success message
        return redirect()->route('activity-group.index')->with('success', 'Activity Group updated successfully.');
    }


    /**
     * Remove the specified activity group from storage.
     */
    public function destroy(ActivityGroup $activityGroup)
    {
        $activityGroup->delete();
        return redirect()->route('activity-group.index')->with('success', 'Activity Group deleted successfully.');
    }
}
