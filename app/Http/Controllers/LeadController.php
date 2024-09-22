<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Assets\Utils;
use App\Models\Freezone;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use Illuminate\Validation\Rules\Password;

class LeadController extends Controller
{

    public function index(Request $request)
    {
        $leads = Lead::orderBy('id', 'desc');

        if($request->start_date && !$request->end_date){ 
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if($request->end_date && !$request->start_date){ 
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ]);

        if($request->start_date){
            $leads = $leads->whereBetween('created_at', [$request->start_date.' 00:00:00', $request->end_date.' 23:59:59']);
        }

        if($request->name){ 
            $leads = $leads->where('first_name', 'LIKE', "%{$request->name}%");
        }

        if($request->country){ 
            $leads = $leads->where('country', 'LIKE', "%{$request->country}%");
        }

        $leads = $leads->paginate(Utils::itemPerPage);

        return view('lead.lead_index', compact('leads'));
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'email' => 'required|email|max:255|unique:leads',
                'mobile_number' => 'nullable|string|max:15|min:7',
                'country' => 'nullable|string|max:50',
                'freezone_id' => 'required|exists:freezones,id,deleted_at,NULL',
                'business_setup_info' => 'nullable|string|max:5000'
            ],[
                'freezone_id' => 'The selected freezone is invalid.'
            ]
        );

            $lead = new Lead;
            $lead->first_name = $request->first_name;
            $lead->last_name = $request->last_name;
            $lead->email = $request->email;
            $lead->mobile_number = $request->mobile_number;
            $lead->country = $request->country;
            $lead->freezone_id = $request->freezone_id;
            $lead->business_setup_info = $request->business_setup_info;
            $lead->save();
    
            return response()->json(['message' => ResponseMessage::LeadCreated, 'data' => $lead], 200);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function show(string $uuid)
    {
        $lead = Lead::where('uuid', $uuid)->first();

        if($lead){

            $freezone = Freezone::select('name')->where('id', $lead->freezone_id)->first();

            $freezone_name = '';

            if($freezone){
                $freezone_name = $freezone->name;
            }

            return view('lead.lead_show', compact('lead', 'freezone_name'));
        }
        return abort(404);
    }


    public function delete(string $uuid)
    {
        $lead = Lead::where('uuid', $uuid)->first();

        if(!$lead){
            return abort(404);
        }

        $lead->delete();

        return redirect()->route('lead.index')->with('success', 'Lead deleted successfully');
    }

}
