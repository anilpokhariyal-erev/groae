<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Freezone;
use App\Models\ActivityGroup;
use App\Models\License;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $token = Auth::user()->createToken('ActivityGroupToken')->plainTextToken;
        return view('admin.activity-groups.create', compact('freezones','token')); // Pass both freezones and licenses to the view
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
            'licence_id' => 'required|exists:licenses,id',
            'code' => 'required|string|max:20|unique:activity_groups,code',
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
         $licenses = License::all();
        return view('admin.activity-groups.edit', compact('freezones', 'activityGroup', 'licenses'));
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
            'licence_id' => 'required|exists:licenses,id',
            'code' => 'nullable|string|max:20|unique:activity_groups,code',
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
