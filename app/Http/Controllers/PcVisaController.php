<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Assets\Utils;
use App\Models\Freezone;
use App\Assets\ResponseMessage;
use App\Models\PcVisa;


class PcVisaController extends Controller
{
    public function index(Request $request)
    {
        $visa_type = PcVisa::with('freezone')->orderBy('id','DESC');
        
        if($request->title){
            $visa_type->where('visa_type','LIKE',"%{$request->title}%");
        }

        if($request->start_date){
            $visa_type = $visa_type->whereDate('created_at', '>=', $request->start_date);
        }
        if($request->end_date){
            $visa_type = $visa_type->whereDate('created_at', '<=', $request->end_date);
        }

        if($request->start_date && $request->end_date){
            $visa_type = $visa_type->whereDate('created_at', '>=', $request->start_date)->whereDate('created_at', '<=', $request->end_date);
        }
        
        $visa_type = $visa_type->paginate(Utils::itemPerPage);
        return view('pc.visa_type.visa-type-index',compact('visa_type'));
    }

    public function create()
    {
        $freezone = Freezone::get();
        return view('pc.visa_type.visa-type-create',compact('freezone'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required',
            'validity' => 'required',
            'validity_type' => 'required',
            'min_no_visa' => 'required',
            'max_no_visa' => 'required',
        ]);

        try{
            $visa_type = new PcVisa();
            $visa_type->freezone_id = $request->freezone;
            $visa_type->visa_type = $request->name;
            $visa_type->validity = $request->validity;
            $visa_type->validity_type = $request->validity_type;
            $visa_type->min_no_visa = $request->min_no_visa;
            $visa_type->max_no_visa = $request->max_no_visa;
            $visa_type->cost = $request->price;
            $visa_type->save();
            return back()->with('success', "Visa Type successfully created");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    public function show(string $uuid)
    {
       //
    }

    public function edit(string $uuid)
    {
        $freezone = Freezone::get();
        $visa_type = PcVisa::with('freezone')->where('id',$uuid)->first();
        return view('pc.visa_type.visa-type-edit',compact('visa_type','freezone'));
    }

    public function update(Request $request, string $uuid)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required',
            'validity' => 'required',
            'validity_type' => 'required',
            'min_no_visa' => 'required',
            'max_no_visa' => 'required',
        ]);
        try{
            $visa_type = PcVisa::find($uuid);
            $visa_type->freezone_id = $request->freezone;
            $visa_type->visa_type = $request->name;
            $visa_type->validity = $request->validity;
            $visa_type->validity_type = $request->validity_type;
            $visa_type->min_no_visa = $request->min_no_visa;
            $visa_type->max_no_visa = $request->max_no_visa;
            $visa_type->cost = $request->price;
            $visa_type->save();
            return back()->with('success', "Visa type successfully updated");
        }catch(\Exception $e){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    public function destroy(string $uuid)
    {
        $visa_type = PcVisa::where('id', $uuid)->first();
        if(!$visa_type){
            return abort(404);
        }
        $visa_type->delete();
        return back()->with('success', "Visa Type successfully Deleted");
    }

}
