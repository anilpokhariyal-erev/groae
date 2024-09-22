<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\PcVisa;
use App\Models\Freezone;
use App\Models\PcLicense;
use App\Models\PcPackage;
use Illuminate\Http\Request;
use App\Models\PcVisaAttribute;
use App\Models\PcPackageAttribute;
use App\Models\PcAdditionalActivity;
use App\Models\PcActivity;
use Illuminate\Support\Facades\DB;

class CostCalculator extends Controller
{
    public function calculate_licensecost(){
        $freezones = Freezone::select('id', 'name')->get();
        $licenses = PcLicense::select('id', 'name')->where('status', 1)->get();
        $packages = PcPackage::select('id', 'name')->get();
        $package_attrs = PcPackageAttribute::select('id', 'name', 'type')->get();

        $visa_types = PcVisa::select('id', 'visa_type')->get();
        $visa_activities = PcVisaAttribute::select('id', 'name')->get();
        return view('front.cost_calculator.calculate_licensecost',  compact('freezones', 'licenses', 'packages', 'package_attrs','visa_types', 'visa_activities'));
    }

    public function store_calculate_licensecost(Request $request){

        $request->validate([
            'freezone_id' => 'required|numeric',
            'license_type' => 'required|numeric',
            'package' => 'required|numeric',
            'office' => 'required',
            'activity' => 'required|array',
            'activity.*' => 'required|integer',
            'visa_type' => 'required|numeric',
            'number_of_visa' => 'required|numeric',
            'visa_activity' => 'required|array',
            'visa_activity.*' => 'required|integer',
            'additional_activity' => 'required'
        ]);

        $data = [];
        $data['freezone'] = Freezone::select('id', 'name')->where('id', $request->freezone_id)->first();
        $data['license'] = PcLicense::select('id', 'name', 'price')->where('status', 1)->where('id', $request->license_type)->where('freezone_id', $request->freezone_id)->first();
        $data['package'] = PcPackage::select('id', 'name', 'phl_fee')->where('status', 1)->where('id', $request->package)->where('freezone_id', $request->freezone_id)->first();
        $data['package_selected_attr'] = PcPackageAttribute::select('id', 'name', 'price')->where('type', 'selectable')->where('status', 1)->where('id', $request->office)->first();
        $data['visa_type'] = PcVisa::select('id', 'visa_type','validity','validity_type', 'cost')->where('status', 1)->where('id', $request->visa_type)->where('freezone_id', $request->freezone_id)->first();

        $package_id = $request->package;
        $package_attrs = PcPackageAttribute::with('package')->whereHas('package', function ($query) use($package_id) {
            return $query->where('pc_package_id', '=', $package_id);
        })->select('id', 'name', 'price')->where('type', 'included')->where('status', 1)->get();
       
       
        $visa_activities = PcVisaAttribute::select('id', 'name', 'price')->where('status', 1)->whereIn('id', $request->visa_activity)->get();

        $additional_activity = PcAdditionalActivity::select('id','name','price')->where('status', 1)->where('id', $request->additional_activity)->where('freezone_id', $request->freezone_id)->first();

        $data['pack_office_include'] = $package_attrs;
        $data['additional_activity'] = $additional_activity;
        $data['number_of_visa'] = $request->number_of_visa;
        $data['visa_activities'] = $visa_activities;
        $data['package_attrs_cost'] = 0;
        $data['package_attrs_name'] = '';

        foreach($package_attrs as $package_attr){
            $data['package_attrs_cost'] += $package_attr->price;
            $data['package_attrs_name'] = ucfirst($package_attr->name).',';
        }
      

        $data['visa_activities_cost'] = 0;
        $data['visa_activitie_name'] = '';

        foreach($visa_activities as $visa_activitie){
            $data['visa_activities_cost'] += $visa_activitie->price;
            $data['visa_activitie_name'] .= ucfirst($visa_activitie->name).',';
        }

        //$visacost = $data['visa_type']->cost + $data['visa_activities_cost'];

        //$data['visa_type_cost'] = $visacost * $data['number_of_visa'];
        $data['total'] = $data['license']->price + $data['package']->phl_fee + $data['package_selected_attr']->price + $data['package_attrs_cost'] + (($data['visa_type']->cost + $data['visa_activities_cost']) * $data['number_of_visa']) + $data['additional_activity']->price;
        //$data['total'] = $data['license']->price + $data['package']->phl_fee + $data['package_selected_attr']->price + $data['package_attrs_cost'] + $data['visa_type_cost'] + $data['additional_activity']->price + 2000;
       /* echo $data['license']->price."<br>";
        echo $data['package']->phl_fee."<br>";
        echo  $data['package_selected_attr']->price."<br>";
        echo $data['package_attrs_cost']."<br>";
        echo "visa type==".$data['visa_type']->cost.'=====visa activity'.$data['visa_activities_cost']."<br>";
        echo $data['visa_type_cost']."<br>";
        echo $data['additional_activity']->price."<br>";
        echo $data['total']; die;*/
        return view('front.cost_calculator.cost_summary',$data);

    }


    public function getFreezoneAmenities(Request $request){
        $freezone_id = $request->freezone_id;
        $licenses = PcLicense::select('id', 'name')->where('status', 1)->where('freezone_id',$freezone_id)->get();
        $packages = PcPackage::select('id', 'name')->where('freezone_id',$freezone_id)->get();
        $visa_types = PcVisa::select('id', 'visa_type')->where('freezone_id',$freezone_id)->get();
        $additional_activity = PcAdditionalActivity::select('id', 'name')->where('freezone_id',$freezone_id)->get();
        $activity = PcActivity::with('child_activity:id,name,parent_id,freezone_id')->whereHas('child_activity', function ($query) use($freezone_id) {
                                    return $query->where('freezone_id', '=', $freezone_id);
                                })->select('id', 'name','parent_id','freezone_id')->where('freezone_id',$freezone_id)->get();

        $data = [
            'licenses' => $licenses,
            'packages' => $packages,
            'visa_types' => $visa_types,
            'activity' => $activity,
            'addition_activity' => $additional_activity
        ];
        
        $response = response()->json(array('msg'=> "success", 'data' => $data), 200);
        return $response;
    }
    public function getOffices(Request $request){
        try{
            if($request->package_id){
                $package_id = $request->package_id;
                $offices = DB::table('pc_package_attributes')
                    ->join('package_attribute_linking', 'pc_package_attributes.id', '=', 'package_attribute_linking.pc_package_attribute_id')
                    ->where('package_attribute_linking.pc_package_id',$package_id)
                    ->get();
                $response = response()->json(array('msg'=> "success", 'data' => $offices), 200);
                return $response;
            }
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    public function getVisaActivity(Request $request){
        $visa_type_id = $request->visa_type_id;
        if($visa_type_id){
            $visa_activity = DB::table('pc_visa_attributes')
                ->join('visa_attribute_linking', 'pc_visa_attributes.id', '=', 'visa_attribute_linking.pc_visa_attribute_id')
                ->where('visa_attribute_linking.pc_visa_id',$visa_type_id)
                ->select('pc_visa_attributes.id','pc_visa_attributes.name')
                ->get();

            $visa_type = PcVisa::select('id', 'min_no_visa', 'max_no_visa')->where('status', 1)->where('id', $request->visa_type_id)->first();
            $visa_numbers = array();
            for($i = $visa_type->min_no_visa; $i<=$visa_type->max_no_visa; $i++){
                $visa_numbers[] = $i; 
            }
            $data = [
                'visa_activity' => $visa_activity,
                'number_of_visa' => $visa_numbers
            ];
            
            $response = response()->json(array('msg'=> "success", 'data' => $data), 200);
            return $response;
        }
    }


}
