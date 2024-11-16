<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function setting(){
        if (Auth::user()->setting != 1) {
            abort(403, 'Unauthorized action.');
        }

        $settings = Setting::all();
        $settings_data = [];
        foreach ($settings as $setting){
            $settings_data[$setting->section_key][$setting->title] = $setting->value;
        }
        return view('admin.setting.setting', compact('settings_data'));
    }

    public function numbers(){
        // Fetching 'groae_number' data
        $groae_number = Setting::where('section_key', 'groae_number')->get();

        return view('admin.setting.numbers', compact('groae_number'));
    }


    public function setting_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ai_field_limit' => 'required|array',
            'ai_field_limit.*.value' => 'nullable|integer',
            'ai_package_limit' => 'required|array',
            'ai_package_limit.*.value' => 'nullable|integer',
            'company_name' => 'required|string|max:255',
            'company_tin_no' => 'required|string|max:50',
            'company_address' => 'required|string|max:500',
            'company_phone' => 'required|string|max:20',
            'company_invoice_prefix' => 'required|string|max:20',
            'bank_name' => 'required|string|max:255',
            'bank_code' => 'required|string|max:50',
            'account_number' => 'required|string|max:20',
            'account_holder' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->route('setting.view')->withErrors($validator)->withInput();
        }
        $validatedData = $validator->validate();
        try {
            // Handling AI Field Limits (min/max)
            foreach ($request->ai_field_limit as $fieldLimit) {
                Setting::updateOrCreate(
                    [
                        'section_key' => $fieldLimit['section_key'],
                        'title' => $fieldLimit['title']
                    ],
                    [
                        'value' => $fieldLimit['value']
                    ]
                );
            }

            foreach ($request->ai_package_limit as $packageLimit) {
                Setting::updateOrCreate(
                    [
                        'section_key' => $packageLimit['section_key'],
                        'title' => $packageLimit['title']
                    ],
                    [
                        'value' => $packageLimit['value']
                    ]
                );
            }
           // Assuming you have a Setting model that saves key-value pairs
            $companyInfo = [
                'Company Name' => $validatedData['company_name'],
                'Company TIN No' => $validatedData['company_tin_no'],
                'Company Address' => $validatedData['company_address'],
                'Company Phone' => $validatedData['company_phone'],
                'Company Invoice Prefix' => $validatedData['company_invoice_prefix'],
                'Bank Name' => $validatedData['bank_name'],
                'Bank Code' => $validatedData['bank_code'],
                'Account Number' => $validatedData['account_number'],
                'Account Holder' => $validatedData['account_holder'],
            ];

            foreach ($companyInfo as $title => $value) {
                Setting::updateOrCreate(
                    ['section_key'=>'company_info', 'title' => $title],
                    ['value' => $value]
                );
            }

            return back()->with('success', 'Settings successfully updated');
        } catch (\Exception $e) {
            return back()->with('errors', 'Failed to save settings: ' . $e->getMessage());
        }
    }


    public function numbers_store(Request $request){
        $request->validate([
            'groae_number' => 'required|array',
            'groae_number.*.title' => 'nullable|string',
            'groae_number.*.value' => 'nullable|integer',
        ]);

        try {
            // Handling groae_number updates
            $section_key_groae = $request->groae_number[0]['section_key'];
            Setting::where('section_key', $section_key_groae)->delete();
            Setting::insert($request->groae_number);


            return back()->with('success', 'Numbers successfully updated');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}
