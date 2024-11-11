<?php

namespace App\Http\Controllers\Api;

use App\Models\State;
use App\Models\Package;
use App\Models\Activity;
use App\Models\Freezone;
use App\Http\Controllers\Controller;
use App\Models\PackageActivity;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPackageActivities(Request $request) {
        $activity_groups = explode("___", $request->activityIds);
        $activityGroupIds = array_filter(array_map(function($activity_group) {
            return explode('|', $activity_group)[1] ?? null;
        }, $activity_groups));
        $package_id = $request->package_id;
        
        $activities = PackageActivity::join('activities','activities.id','=','package_activities.activity_id')
                                    ->join('licenses','licenses.id','=','activities.licence_id')
                                    ->where('package_activities.package_id', $package_id)
                                    ->whereIn('activities.activity_group_id', $activityGroupIds)
                                    ->where('activities.status', 1)
                                    // ->groupBy('package_activities.activity_id')
                                    ->select(
                                        'package_activities.id as id', 
                                        'licenses.name as license', 
                                        'activities.name as name'
                                        )
                                    ->get();
    
        return response()->json(compact('activities'));
    }
    
    function getData($key, $id)
    {
        switch ($key) {
            case 'freezone':
                $freezone = Freezone::where(compact("id"))->select('id')->with([
                    'licenses' => function ($query) {
                        $query->select('licenses.id', 'licenses.name');
                    },
                    'offices' => function ($query) {
                        $query->select('offices.id', 'offices.name');
                    },
                    'visa_types' => function ($query) {
                        $query->select('visa_types.id', 'visa_types.name');
                    },
                    'activity_groups' => function ($query) {
                        $query->select('activity_groups.id', 'activity_groups.name');
                    }
                ])->first();

                return response()->json(['data' => $freezone]);
            case 'activity_group':
                // activity_group|2|Group two,activity_group|1|Group one // this is an example
                // Define the regex pattern to match the second item
                $pattern = '/\|(.*?)\|/';
                preg_match_all($pattern, $id, $matches);
                $activityIds = $matches[1];
                $activities = Activity::whereIn('activity_group_id', $activityIds)->select('id', 'name')->where('status', 1)->get();
                return response()->json(compact('activities'));
                break;
            case 'office':
                $packages = Package::where('office_id', $id)->select('id', 'name')->where('status', 1)->get();
                return response()->json(compact('packages'));
                break;
            case 'country':
                $states = State::where('country_id', $id)->select('id', 'name')->get();
                return response()->json(compact('states'));
                break;
            default:
                # code...
                break;
        }
        return response()->json($key);
    }
}
