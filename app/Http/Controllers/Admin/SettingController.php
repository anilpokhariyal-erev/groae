<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function setting(){
        $groae_number = Setting::where('section_key','groae_number')->get();
        return view('admin.setting.setting',compact('groae_number'));
    }
    public function setting_store(Request $request){
        $request->validate([
            'groae_number' => 'required|array',
            'groae_number.*.title' => 'nullable|string',
            'groae_number.*.value' => 'nullable|integer',
        ]);
        
        try{
            $section_key = $request->groae_number[0]['section_key'];
            Setting::where('section_key',$section_key)->delete();
            Setting::insert($request->groae_number);
            return back()->with('success','Setting successfully updated');
        }catch(\Exception $e){
            echo $e->getMessage();
        }

    }
}
