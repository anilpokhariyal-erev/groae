<?php

namespace App\Http\Controllers;

use App\Models\PcLicense;
use Illuminate\Http\Request;
use App\Assets\Utils;
use App\Models\Freezone;
use App\Assets\ResponseMessage;
class PcLicenseController extends Controller
{

    public function index(Request $request)
    {
        $licence = PcLicense::with('freezone')->orderBy('id','DESC');
        
        if($request->title){
            $licence->where('name','LIKE',"%{$request->title}%");
        }

        if($request->start_date){
            $licence = $licence->whereDate('created_at', '>=', $request->start_date);
        }
        if($request->end_date){
            $licence = $licence->whereDate('created_at', '<=', $request->end_date);
        }

        if($request->start_date && $request->end_date){
            $licence = $licence->whereDate('created_at', '>=', $request->start_date)->whereDate('created_at', '<=', $request->end_date);
        }
        
        $licence = $licence->paginate(Utils::itemPerPage);
        return view('pc.licence.licence-index',compact('licence'));
    }

    public function create()
    {
        $freezone = Freezone::get();
        return view('pc.licence.licence-create',compact('freezone'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required',
            'description' => 'required|string|max:1000'
        ]);

        try{
            $licence = new PcLicense();
            $licence->name = $request->name;
            $licence->price = $request->price;
            $licence->description = $request->description;
            $licence->freezone_id = $request->freezone;
            $licence->save();
            return back()->with('success', "Licence successfully created");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function show(string $id)
    {

    }


    public function edit(string $uuid)
    {
        $freezone = Freezone::get();
        $licence = PcLicense::with('freezone')->where('id',$uuid)->first();
        return view('pc.licence.licence-edit',compact('licence','freezone'));
    }


    public function update(Request $request, string $uuid)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required',
            'description' => 'required|string|max:1000'
        ]);
        try{
            $licence = PcLicense::find($uuid);
            $licence->freezone_id = $request->freezone;
            $licence->name = $request->name;
            $licence->price = $request->price;
            $licence->description = $request->description;
            $licence->save();
            return back()->with('success', "Licence successfully Updated");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function destroy(string $uuid)
    {
        $licence = PcLicense::where('id', $uuid)->first();
        if(!$licence){
            return abort(404);
        }
        $licence->delete();
        return back()->with('success', "Licence successfully Deleted");
    }

}
