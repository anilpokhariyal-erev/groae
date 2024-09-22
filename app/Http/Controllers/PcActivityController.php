<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PcActivity;
use App\Assets\Utils;
class PcActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = PcActivity::withCount('child_activity')->orderBy('id','DESC')->where('parent_id','0');
        /*echo "<pre>";
        print_r($activity);
        die;*/
        $activity = $activity->paginate(Utils::itemPerPage);
        return view('pc.activity.activity-index',compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
