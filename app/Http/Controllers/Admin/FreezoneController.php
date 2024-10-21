<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Assets\Utils;
use App\Models\Freezone;
use App\Models\FreezonePage;
use App\Models\Attribute;
use App\Models\AttributeOption;
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

        if ($freezonesCount >= 38) { // limit for freezones 38
            return back()->with('error', 'You cannot create more than 38 freezones');
        }

        $request->validate([
            'name' => ['required', Rule::unique('freezones')->where(function ($query) {
                return $query->whereNull('deleted_at');
            })],
            'freezone_logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
        ]);

        DB::beginTransaction();
        try {
            // Handle file upload for logo
            $originalName = 'freezones/' . time() . '_' . str_replace(' ', '_', $request->file('freezone_logo')->getClientOriginalName());
            Storage::put($originalName, file_get_contents($request->file('freezone_logo')), 'public');

            // Creating the Freezone
            $name = strtolower($request->name);
            $freezone = new Freezone;
            $freezone->name = $name;
            $freezone->logo = $originalName;
            $freezone->slug = trim(str_replace(' ', '-', $name));
            $freezone->status = 1;

            $freezone->save();

            // Create freezone pages if necessary
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
        $freezone = Freezone::where('uuid', $uuid)->with('defaultAttributes')->firstOrFail();

        if (!$freezone) {
            return abort(404);
        }
        // Fetch attributes, attribute options, currency, activities, and freezones
        $attributes = Attribute::where('status', 1)->get();
        $attributeOptions = AttributeOption::where('status', 1)->get();

        return view('admin.freezone.freezone_edit', compact('freezone', 'attributes', 'attributeOptions',));
    }


    public function update(Request $request, string $uuid)
    {
        // Retrieve the freezone by UUID
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        // Validate the incoming request
        $request->validate([
            'name' => 'required',
            'freezone_logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',

            // Freezone default attributes validation
            'freezone_default_attributes.*.attribute_id' => 'required|exists:attributes,id',
            'freezone_default_attributes.*.attribute_option_id' => 'nullable|exists:attribute_options,id',
            'freezone_default_attributes.*.attribute_value' => 'nullable|numeric|min:0',
            'freezone_default_attributes.*.attribute_free_qty' => 'nullable|numeric|min:0',
            'freezone_default_attributes.*.unit_price' => 'nullable|numeric|min:0',
        ]);

        // Handle file upload for the logo if it exists
        if ($request->file('freezone_logo')) {
            // Delete the old logo if it exists
            if ($freezone->logo) {
                Storage::disk('public')->delete($freezone->logo);
            }

            // Generate a unique file name
            $fileName = time() . '_' . str_replace(' ', '_', $request->file('freezone_logo')->getClientOriginalName());

            // Store the uploaded file in 'freezones'
            $path = $request->file('freezone_logo')->storeAs('freezones', $fileName, 'public');

            // Save the new logo path
            $freezone->logo = $path;
        }

        // Update freezone fields
        $freezone->name = strtolower($request->name);
        $freezone->status = $request->status;

        // Use a transaction to ensure the consistency of the update
        DB::transaction(function () use ($freezone, $request) {
            // Save the updated freezone data
            $freezone->save();

            // Get the freezone_default_attributes data from the request
            $attributesData = $request->input('freezone_default_attributes', []);

            // Collect IDs of the attributes coming from the request
            $attributeKeysFromRequest = [];
            foreach ($attributesData as $attribute) {
                $attributeKey = $attribute['attribute_id'] . ':' . ($attribute['attribute_option_id'] ?? 'null');
                $attributeKeysFromRequest[] = $attributeKey;

                // Set unit_price if not provided but attribute_value is present
                if ($attribute['attribute_value'] && !$attribute['unit_price']) {
                    $attribute['unit_price'] = $attribute['attribute_value'];
                }

                // Check if the attribute record exists for this freezone
                $existingAttribute = $freezone->defaultAttributes()->where([
                    ['attribute_id', '=', $attribute['attribute_id']],
                    ['attribute_option_id', '=', $attribute['attribute_option_id'] ?? null],
                ])->first();

                if ($existingAttribute) {
                    // If the record exists, update it
                    $existingAttribute->update([
                        'allowed_free_qty' => $attribute['attribute_free_qty'] ?? 0,
                        'unit_price' => $attribute['unit_price'] ?? 0,
                    ]);
                } else {
                    // If the record does not exist, create a new one
                    $freezone->defaultAttributes()->create([
                        'attribute_id' => $attribute['attribute_id'],
                        'attribute_option_id' => $attribute['attribute_option_id'] ?? null,
                        'allowed_free_qty' => $attribute['attribute_free_qty'] ?? 0,
                        'unit_price' => $attribute['unit_price'] ?? 0,
                    ]);
                }
            }

            // Fetch all existing attributes from the database for this freezone
            $existingAttributes = $freezone->defaultAttributes()->get();

            // Identify and delete attributes that are not in the incoming request
            foreach ($existingAttributes as $existingAttribute) {
                $existingKey = $existingAttribute->attribute_id . ':' . ($existingAttribute->attribute_option_id ?? 'null');

                if (!in_array($existingKey, $attributeKeysFromRequest)) {
                    // Attribute exists in the database but not in the request, so delete it
                    $existingAttribute->delete();
                }
            }
        });

        // Redirect back with success message
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
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return abort(404);
        }

        $request->validate([
            'about_us' => 'nullable|string',
            'benefits' => 'nullable|string|max:255',
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
            'youtube_embedded_video_link.url' => 'The Youtube video link must be a valid URL.',
            'rule_regulation_image.image' => 'The rule & regulation image must be an image (jpeg, png, jpg, svg).',
            'rule_regulation_image.mimes' => 'The rule & regulation image must be of type: jpeg, png, jpg, svg.',
            'rule_regulation_image.max' => 'The rule & regulation image should not exceed 5000 KB in size.',
        ]);

        // Update fields in Freezone model
        $freezone->about_us = $request->input('about_us');
        $freezone->benefits = $request->input('benefits');
        $freezone->registration_information = $request->input('registration_information');
        $freezone->rule_regulation_type = $request->input('rule_regulation_type');
        $freezone->rule_regulation_info = $request->input('rule_regulation_info');
        $freezone->youtube_embedded_video_link = $request->input('youtube_embedded_video_link');
        
        // Handle licence registration procedures image
        if ($request->hasFile('licence_registration_procedures_image')) {
            if ($freezone->licence_registration_procedures_image) {
                Storage::disk('public')->delete($freezone->licence_registration_procedures_image);
            }
            $licenceImage = time() . '_' . str_replace(' ', '_', $request->file('licence_registration_procedures_image')->getClientOriginalName());
            $licenceImagePath = $request->file('licence_registration_procedures_image')->storeAs('freezones', $licenceImage, 'public');
            $freezone->licence_registration_procedures_image = $licenceImagePath;
        }

        // Handle rule regulation image
        if ($request->hasFile('rule_regulation_image')) {
            if ($freezone->rule_regulation_image) {
                Storage::disk('public')->delete($freezone->rule_regulation_image);
            }
            $ruleRegulationImage = time() . '_' . str_replace(' ', '_', $request->file('rule_regulation_image')->getClientOriginalName());
            $ruleRegulationImagePath = $request->file('rule_regulation_image')->storeAs('freezones', $ruleRegulationImage, 'public');
            $freezone->rule_regulation_image = $ruleRegulationImagePath;
        }

        // Handle license images
        if ($request->hasFile('license_image')) {
            $licenseImages = [];
            foreach ($request->file('license_image') as $key => $image) {
                $licenseImageName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
                $licenseImagePath = $image->storeAs('freezones/licenses', $licenseImageName, 'public');
                $licenseImages[] = $licenseImagePath;
            }
            $freezone->license_images = json_encode($licenseImages);  // Save as JSON if multiple images
        }

        // Handle additional license fields
        $freezone->license_id = $request->input('license_id');
        $freezone->license_name = $request->input('license_name');
        $freezone->additional_info = $request->input('additional_info');
        
        $freezone->save();

        return back()->with('success', 'Freezone information updated successfully.');
    }


    public function destroy(string $uuid)
    {
        $freezone = Freezone::where('uuid', $uuid)->first();

        if (!$freezone) {
            return redirect()->route('freezones.index')->with('error', 'Freezone not found');
        }

        DB::beginTransaction();
        try {
            $freezone->freezone_pages()->delete();
            $freezone->delete();
            DB::commit();
            return redirect()->route('freezones.index')->with('success', 'Freezone deleted successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Error deleting Freezone: ' . $e->getMessage());
            return redirect()->route('freezones.index')->with('error', 'An error occurred while deleting the Freezone');
        }
    }

}
