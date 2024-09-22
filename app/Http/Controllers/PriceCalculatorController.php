<?php

namespace App\Http\Controllers;

use App\Models\PcVisa;
use App\Models\Freezone;
use App\Models\PcLicense;
use App\Models\PcPackage;
use Illuminate\Http\Request;
use App\Models\PcVisaAttribute;
use App\Models\PcPackageAttribute;


class PriceCalculatorController extends Controller
{

    public function calculator_form()
    {
        $freezones = Freezone::select('id', 'name')->get();

        $licenses = PcLicense::select('id', 'name')->where('status', 1)->get();

        $packages = PcPackage::select('id', 'name')->get();

        $package_attrs = PcPackageAttribute::select('id', 'name', 'type')->get();

        $visa_types = PcVisa::select('id', 'visa_type')->get();

        $visa_activities = PcVisaAttribute::select('id', 'name')->get();

        return view('page.price_calculator_form',  compact('freezones', 'licenses', 'packages', 'package_attrs','visa_types', 'visa_activities'));
    }


    public function calculate(Request $request)
    {
        $data = [];

        $data['freezone'] = Freezone::select('id', 'name')->where('id', $request->freezone_id)->first();

        $data['license'] = PcLicense::select('id', 'name', 'price')->where('status', 1)->where('id', $request->license_type)->where('freezone_id', $request->freezone_id)->first();

        $data['package'] = PcPackage::select('id', 'name', 'phl_fee')->where('status', 1)->where('id', $request->package)->where('freezone_id', $request->freezone_id)->first();

        $data['package_selected_attr'] = PcPackageAttribute::select('id', 'name', 'price')->where('type', 'selectable')->where('status', 1)->where('id', $request->package_attrs)->first();

        $package_attrs = PcPackageAttribute::select('id', 'name', 'price')->where('type', 'included')->where('status', 1)->get();

        $data['visa_type'] = PcVisa::select('id', 'visa_type', 'cost')->where('status', 1)->where('id', $request->visa_type)->where('freezone_id', $request->freezone_id)->first();

        $visa_activities = PcVisaAttribute::select('id', 'name', 'price')->where('status', 1)->whereIn('id', $request->visa_activity)->get();

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

        $data['total'] = $data['license']->price + $data['package']->phl_fee + $data['package_selected_attr']->price + $data['package_attrs_cost'] + (($data['visa_type']->cost + $data['visa_activities_cost']) * $request->no_of_visas) + 2000;

        return view('page.price_calculator_result', $data);
        //return view('page.price_calculator_result', compact('freezone', 'license', 'package', 'package_selected_attr', 'package_attrs', 'visa_type', 'visa_activities'));
    }

}
