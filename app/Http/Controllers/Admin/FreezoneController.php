<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Assets\Utils;
use App\Models\Freezone;
use App\Models\FreezonePage;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Exports\ExportFreezone;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\FreezoneBusinessLicense;
use Illuminate\Support\Facades\Storage;

class FreezoneController extends Controller
{
    public $freezone_page_array = [
        [
            'title' => 'About Freezone',
            'slug' => 'about-freezone'
        ],
        [
            'title' => 'Benefits details',
            'slug' => 'benefit-details'
        ],
        [
            'title' => 'Business Licenses Information',
            'slug' => 'business-licenses-information'
        ],
        [
            'title' => 'Customer Guides',
            'slug' => 'customer-guides'
        ],
        [
            'title' => 'Rules & Regulations',
            'slug' => 'rules-and-regulations'
        ],
        [
            'title' => 'facilities',
            'slug' => 'facilities'
        ],
        [
            'title' => 'Activities Information',
            'slug' => 'activities-information'
        ],
        [
            'title' => 'FQA',
            'slug' => 'faq'
        ],
        [
            'title' => 'View Lowest Price Package',
            'slug' => 'view-lowest-price-package'
        ],
    ];

    public function index(Request $request)
    {
        if (Auth::user()->freezone_id) {
            $freezones = Freezone::select('uuid', 'name', 'logo', 'status', 'created_at')->where('id', Auth::user()->freezone_id);
        } else {
            $freezones = Freezone::select('uuid', 'name', 'logo', 'status', 'created_at');
        }

        if ($request->start_date && !$request->end_date) {
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if ($request->end_date && !$request->start_date) {
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ]);

        if ($request->start_date) {
            $freezones = $freezones->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        }

        if ($request->name) {
            $freezones = $freezones->where('name', 'LIKE', "%{$request->name}%");
        }

        if ($request->export) {
            $freezones = $freezones->select('name', 'about', 'benefits', 'licence_registration_procedures_info', 'licence_registration_procedures_video_link', 'rule_regulation_type', 'rule_regulation_info')->get();
            return Excel::download(new ExportFreezone($freezones), 'freezones.xlsx');
        }

        $freezones = $freezones->orderBy('id', 'desc')->paginate(Utils::itemPerPage);

        return view('admin.freezone.freezone_index', compact('freezones'));
    }

    public function create()
    {
        return view('admin.freezone.freezone_create');
    }

    public function store(Request $request)
    {

        $freezonesCount = Freezone::select('id')->count();

        if ($freezonesCount >= 38) { //limit for freezones 38
            return back()->with('error', 'You cannot create more than 38 freezones');
        }

        $request->validate([
            'name' => ['required', Rule::unique('freezones')->where(function ($query) {
                return $query->whereNull('deleted_at');
            }),],
            'freezone_logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
        ]);
        DB::beginTransaction();
        try {
            $originalName = 'freezones/' . time() . '_' . str_replace(' ', '_', $request->file('freezone_logo')->getClientOriginalName());
            // $logo_path = $request->file('freezone_logo')->storeAs('public/freezone', $originalName);
            Storage::put($originalName, file_get_contents($request->file('freezone_logo')), 'public');

            $name = strtolower($request->name);
            $freezone = new Freezone;
            $freezone->name = $name;
            $freezone->logo = $originalName;
            $freezone->slug = trim(str_replace(' ', '-', $name));
            $freezone->save();

            $freezone->freezone_pages()->createMany($this->freezone_page_array);
            DB::commit();

            return redirect()->route('freezones.index')->with('success', ResponseMessage::FreezoneCreate);
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    public function edit(string $uuid)
    {
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        return view('admin.freezone.freezone_edit', compact('freezone'));
    }

    public function update(Request $request, string $uuid)
    {
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        $request->validate([
            'name' => 'required',
            'freezone_logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
        ]);

        if ($request->file('freezone_logo')) {
            Storage::delete($freezone->logo);
            $originalName = 'freezones/' . time() . '_' . str_replace(' ', '_', $request->file('freezone_logo')->getClientOriginalName());
            //$logo_path = $request->file('freezone_logo')->storeAs('public/freezone', $originalName);
            Storage::put($originalName, file_get_contents($request->file('freezone_logo')), 'public');
            $freezone->logo = $originalName;
        }

        $freezone->name = strtolower($request->name);
        $freezone->status = $request->status;
        $freezone->save();

        return back()->with('success', 'Freezone updated successfully');
    }

    public function freezoneInfoShow(string $uuid)
    {
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        return view('admin.freezone.freezone_info_show', compact('freezone'));
    }

    public function freezoneInfoEdit(string $uuid)
    {
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        return view('admin.freezone.freezone_info_edit', compact('freezone'));
    }

    public function freezoneInfoUpdate(Request $request, string $uuid)
    {
        // try{
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        $request->validate([
            'about_us' => 'nullable|string',
            'benefits' => 'nullable',
            'license_id' => 'nullable|array',
            'license_id.*' => 'nullable|string',
            'license_name' => 'nullable|array',
            'license_name.*' => 'nullable|string|max:255',
            'license_image' => 'nullable|array',
            'license_image.*' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
            'additional_info' => 'nullable|array',
            'additional_info.*' => 'nullable|string',
            'registration_information' => 'nullable|string',
            'licence_registration_procedures_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
            'youtube_embedded_video_link' => 'nullable|url|max:255',
            'rule_regulation_type' => 'nullable|string',
            'rule_regulation_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
            'rule_regulation_info' => 'nullable|string',
        ], [
            'benefits.max' => 'The benefits field should not exceed 255 characters.',
            'license_name.*.max' => 'Each license name should not exceed 255 characters.',
            'license_image.*.image' => 'Each license image must be an image (jpeg, png, jpg, svg).',
            'license_image.*.mimes' => 'Each license image must be of type: jpeg, png, jpg, svg.',
            'license_image.*.max' => 'Each license image should not exceed 5000 KB in size.',
            'licence_registration_procedures_image.image' => 'The license registration procedures image must be an image (jpeg, png, jpg, svg).',
            'licence_registration_procedures_image.mimes' => 'The license registration procedures image must be of type: jpeg, png, jpg, svg.',
            'licence_registration_procedures_image.max' => 'The license registration procedures image should not exceed 5000 KB in size.',
            'youtube_embedded_video_link.url' => 'The license registration procedures Youtube video link must be a valid URL.',
            'rule_regulation_image.image' => 'The rule & regulation image must be an image (jpeg, png, jpg, svg).',
            'rule_regulation_image.mimes' => 'The rule & regulation image must be of type: jpeg, png, jpg, svg.',
            'rule_regulation_image.max' => 'The rule & regulation image should not exceed 5000 KB in size.',
        ]);

        /*$request->validate([
                'about_us' => 'nullable|string',
                'benefits' => 'nullable',
               
                'business_licence_info' => 'nullable',
                'customer_guide_info' => 'nullable',
                'customer_guide' => 'nullable',
                'facilities' => 'nullable',
                'activity_info' => 'nullable',
                'faq' => 'nullable',
                'lowest_price_package' => 'nullable',


                'license_id' => 'nullable|array',
                'license_id.*' => 'nullable|string',
                'license_name' => 'nullable|array',
                'license_name.*' => 'nullable|string|max:255',
                'license_image' => 'nullable|array',
                'license_image.*' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
                'additional_info' => 'nullable|array',
                'additional_info.*' => 'nullable|string',
                'registration_information' => 'nullable|string',
                'licence_registration_procedures_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
                'youtube_embedded_video_link' => 'nullable|url|max:255',
                'rule_regulation_type' => 'nullable|string',
                'rule_regulation_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
                'rule_regulation_info' => 'nullable|string',
            ], [
                'benefits.max' => 'The benefits field should not exceed 255 characters.',
                'license_name.*.max' => 'Each license name should not exceed 255 characters.',
                'license_image.*.image' => 'Each license image must be an image (jpeg, png, jpg, svg).',
                'license_image.*.mimes' => 'Each license image must be of type: jpeg, png, jpg, svg.',
                'license_image.*.max' => 'Each license image should not exceed 5000 KB in size.',
                'licence_registration_procedures_image.image' => 'The license registration procedures image must be an image (jpeg, png, jpg, svg).',
                'licence_registration_procedures_image.mimes' => 'The license registration procedures image must be of type: jpeg, png, jpg, svg.',
                'licence_registration_procedures_image.max' => 'The license registration procedures image should not exceed 5000 KB in size.',
                'youtube_embedded_video_link.url' => 'The license registration procedures Youtube video link must be a valid URL.',
                'rule_regulation_image.image' => 'The rule & regulation image must be an image (jpeg, png, jpg, svg).',
                'rule_regulation_image.mimes' => 'The rule & regulation image must be of type: jpeg, png, jpg, svg.',
                'rule_regulation_image.max' => 'The rule & regulation image should not exceed 5000 KB in size.',
            ]); */

        $rule_reg_image = null;

        $freezone->about = $request->about_us;
        $freezone->benefits = $request->benefits;
        $freezone->rule_regulation_type = $request->rule_regulation_type;
        $freezone->rule_regulation_info = $request->rule_regulation_info;

        if ($request->file('rule_regulation_image')) {
            $originalName = time() . '_' . $request->file('rule_regulation_image')->getClientOriginalName();
            $rule_reg_image = $request->file('rule_regulation_image')->storeAs('public/freezone', $originalName);
            $freezone->rule_regulation_logo = $rule_reg_image;
        }

        $freezone->licence_registration_procedures_info = $request->registration_information;
        $freezone->licence_registration_procedures_video_link = $request->youtube_embedded_video_link;

        if ($request->file('licence_registration_procedures_image')) {
            $originalName = time() . '_' . $request->file('licence_registration_procedures_image')->getClientOriginalName();
            $licence_registration_procedures_logo = $request->file('licence_registration_procedures_image')->storeAs('public/freezone', $originalName);
            $freezone->licence_registration_procedures_logo = $licence_registration_procedures_logo;
        }


        /*$freezone->business_licence_info = $request->business_licence_info;
            $freezone->customer_guide_info = $request->customer_guide_info;*/

        /*if($request->file('customer_guide')){
                $originalName = time().'_'.$request->file('customer_guide')->getClientOriginalName();
                $customer_guide_pdf = $request->file('customer_guide')->storeAs('public/freezone', $originalName);
                $freezone->customer_guide_file = $customer_guide_pdf;
            }*/

        /* $freezone->facilities_info = $request->facilities;
            $freezone->activities_info = $request->activity_info; 
            $freezone->faq_info = $request->faq;
            $freezone->price_package_info = $request->lowest_price_package;*/
        $freezone->save();


        foreach ($request->license_id as $key => $license_id) {

            $license_image[$key] = null;

            if (isset($request->license_name[$key])) {
                if ($license_id) {

                    $freezone_business = $freezone->business_licenses->where('uuid', $license_id)->first();

                    $freezone_business->name = $request->license_name[$key];
                    $freezone_business->addition_info = isset($request->additional_info[$key]) ? $request->additional_info[$key] : '';

                    // if($request->license_image){
                    if (isset($request->license_image[$key])) {
                        $license_image[$key] = $request->license_image[$key]->store('public/freezone');
                        $freezone_business->image = $license_image[$key];
                    }
                    // }

                    $freezone_business->save();

                    if (isset($request->license_delete[$key])) {
                        FreezoneBusinessLicense::where('uuid', $request->license_delete[$key])->delete();
                    }
                } else {

                    $license_image[$key] = null;

                    if (isset($request->license_image[$key])) {
                        $license_image[$key] = $request->license_image[$key]->store('public/freezone');
                    }

                    $freezone_business = new FreezoneBusinessLicense([
                        'name' => $request->license_name[$key],
                        'image' => $license_image[$key],
                        'addition_info' => isset($request->additional_info[$key]) ? $request->additional_info[$key] : '',
                    ]);

                    $freezone->business_licenses()->save($freezone_business);
                }
            }
        }

        return back()->with('success', 'Freezone Info update successfully');
        // } catch(\Exception $e) {
        //     dd($e);
        // }
    }

    public function destroy(string $uuid)
    {
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return redirect()->route('fadmin.freezone.freezone_index')->with('error', 'Freezone not found');
        }

        DB::beginTransaction();
        try {
            $freezone->freezone_pages()->delete();
            $freezone->delete();
            DB::commit();
            return redirect()->route('fadmin.freezone.freezone_index')->with('success', 'Freezone deleted successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Error deleting Freezone: ' . $e->getMessage());
            return redirect()->route('fadmin.freezone.freezone_index')->with('error', 'An error occurred while deleting the Freezone');
        }
    }
}
