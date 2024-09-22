<?php

namespace App\Http\Controllers;

use App\Models\PcPackage;
use Illuminate\Http\Request;
use App\Assets\Utils;
use App\Models\Freezone;
use App\Assets\ResponseMessage;
class PcPackageController extends Controller
{

    public function index(Request $request)
    {
        $package = PcPackage::with('freezone')->orderBy('id','DESC');
        
        if($request->title){
            $package->where('name','LIKE',"%{$request->title}%");
        }

        if($request->start_date){
            $package = $package->whereDate('created_at', '>=', $request->start_date);
        }

        if($request->end_date){
            $package = $package->whereDate('created_at', '<=', $request->end_date);
        }

        if($request->start_date && $request->end_date){
            $package = $package->whereDate('created_at', '>=', $request->start_date)->whereDate('created_at', '<=', $request->end_date);
        }
        
        $package = $package->paginate(Utils::itemPerPage);
        return view('pc.package.package-index',compact('package'));
    }

    public function create()
    {
        $freezone = Freezone::get();
        return view('pc.package.package-create',compact('freezone'));
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
            $licence = new PcPackage();
            $licence->name = $request->name;
            $licence->phl_fee = $request->price;
            $licence->description = $request->description;
            $licence->freezone_id = $request->freezone;
            $licence->save();
            return back()->with('success', "Package successfully created");
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
        $package = PcPackage::with('freezone')->where('id',$uuid)->first();
        return view('pc.package.package-edit',compact('package','freezone'));
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
            $licence = PcPackage::find($uuid);
            $licence->freezone_id = $request->freezone;
            $licence->name = $request->name;
            $licence->phl_fee = $request->price;
            $licence->description = $request->description;
            $licence->save();
            return back()->with('success', "Package successfully Updated");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function destroy(string $uuid)
    {
        $licence = PcPackage::where('id', $uuid)->first();
        if(!$licence){
            return abort(404);
        }
        $licence->delete();
        return back()->with('success', "Package successfully Deleted");
    }
}
