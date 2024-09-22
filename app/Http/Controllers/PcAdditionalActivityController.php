<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assets\Utils;
use App\Models\Freezone;
use App\Assets\ResponseMessage;
use App\Models\PcAdditionalActivity;

class PcAdditionalActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $additional_activity = PcAdditionalActivity::with('freezone')->orderBy('id','DESC');
        
        if($request->title){
            $additional_activity->where('name','LIKE',"%{$request->title}%");
        }

        if($request->start_date){
            $additional_activity = $additional_activity->whereDate('created_at', '>=', $request->start_date);
        }
        if($request->end_date){
            $additional_activity = $additional_activity->whereDate('created_at', '<=', $request->end_date);
        }

        if($request->start_date && $request->end_date){
            $additional_activity = $additional_activity->whereDate('created_at', '>=', $request->start_date)->whereDate('created_at', '<=', $request->end_date);
        }
        
        $additional_activity = $additional_activity->paginate(Utils::itemPerPage);
        return view('pc.additional_activity.additional-activity-index',compact('additional_activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $freezone = Freezone::get();
        return view('pc.additional_activity.additional-activity-create',compact('freezone'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required',
        ]);

        try{
            $licence = new PcAdditionalActivity();
            $licence->name = $request->name;
            $licence->price = $request->price;
            $licence->freezone_id = $request->freezone;
            $licence->save();
            return back()->with('success', "Licence successfully created");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
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
    public function edit(string $uuid)
    {
        $freezone = Freezone::get();
        $additional_activity = PcAdditionalActivity::with('freezone')->where('id',$uuid)->first();
        return view('pc.additional_activity.additional-activity-edit',compact('additional_activity','freezone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required',
        ]);
        try{
            $licence = PcAdditionalActivity::find($uuid);
            $licence->freezone_id = $request->freezone;
            $licence->name = $request->name;
            $licence->price = $request->price;
            $licence->save();
            return back()->with('success', "Additional Activity successfully Updated");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $licence = PcAdditionalActivity::where('id', $uuid)->first();
        if(!$licence){
            return abort(404);
        }
        $licence->delete();
        return back()->with('success', "Additional Activity successfully Deleted");
    }
}
