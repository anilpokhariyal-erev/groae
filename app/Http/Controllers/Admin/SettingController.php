<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function setting(){
        // Fetching 'groae_number' data
        $groae_number = Setting::where('section_key', 'groae_number')->get();
    
        // Fetching 'min' and 'max' data for 'manage_ai_fields_limit'
        $ai_field_limits = Setting::where('section_key', 'manage_ai_fields_limit')
                                  ->pluck('value', 'title') // Fetching 'value' and 'title' fields as key-value pairs
                                  ->toArray(); // Convert to an array
    
        return view('admin.setting.setting', compact('groae_number', 'ai_field_limits'));
    }

    public function setting_store(Request $request){
        $request->validate([
            'groae_number' => 'required|array',
            'groae_number.*.title' => 'nullable|string',
            'groae_number.*.value' => 'nullable|integer',
            'ai_field_limit' => 'required|array',
            'ai_field_limit.*.value' => 'nullable|integer',
        ]);
        
        try {
            // Handling groae_number updates
            $section_key_groae = $request->groae_number[0]['section_key'];
            Setting::where('section_key', $section_key_groae)->delete();
            Setting::insert($request->groae_number);

            // Handling AI Field Limits (min/max)
            $section_key_ai = $request->ai_field_limit[0]['section_key'];
            Setting::where('section_key', $section_key_ai)->delete();
            Setting::insert($request->ai_field_limit);

            return back()->with('success', 'Settings successfully updated');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
