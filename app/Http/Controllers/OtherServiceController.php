<?php

namespace App\Http\Controllers;

use App\Assets\Utils;
use App\Models\OtherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OtherServiceController extends Controller
{

    public function index()
    {
        $otherServices = OtherService::orderBy('id', 'desc')->paginate(Utils::itemPerPage);
        return view('other-service.other_service_index', compact('otherServices'));
    }


    public function create()
    {
        return view('other-service.other_service_create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'service_type' => 'required|string|max:100',
            'service_name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'about' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
        ],[
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]);

        $preServiceCount = OtherService::select('id')->where('service_type', 'pre_incorporation')->count();

        if($preServiceCount >= 4){
            return back()->with('error', 'You cannot create more than 4 pre incorporation services');
        }

        $postServiceCount = OtherService::select('id')->where('service_type', 'post_incorporation')->count();

        if($postServiceCount >= 8){
            return back()->with('error', 'You cannot create more than 8 post incorporation services');
        }

        $otherService = new OtherService;
        $otherService->image = null;

        if($request->file('image')){
            $originalName = time().'_'.$request->file('image')->getClientOriginalName();
            $image_path = $request->file('image')->storeAs('public/freezone/other_service', $originalName);
            $otherService->image = $image_path;
        }

        $otherService->service_type = $request->service_type;
        $otherService->service_name = $request->service_name;
        $otherService->description = $request->description;
        $otherService->about = $request->about;
        $otherService->save();

        return redirect()->route('other-service.index')->with('success', 'Other Service created successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $uuid)
    {
        $otherService = OtherService::where('uuid', $uuid)->first();

        if($otherService){
            return view('other-service.other_service_edit', compact('otherService'));
        }
        return abort(404);
    }

    public function update(Request $request, string $uuid)
    {
        $otherService = OtherService::where('uuid', $uuid)->first();

        if(!$otherService){
            return abort(404);
        }

        $request->validate([
            'service_type' => 'required|string|max:100',
            'service_name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'about' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
        ],[
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]);

        if($request->file('image')){
            $otherService->image ? Storage::delete($otherService->image):'';
            $originalName = time().'_'.$request->file('image')->getClientOriginalName();
            $image_path = $request->file('image')->storeAs('public/freezone/other_service', $originalName);
            $otherService->image = $image_path;
        }

        $otherService->service_type = $request->service_type;
        $otherService->service_name = $request->service_name;
        $otherService->description = $request->description;
        $otherService->about = $request->about;
        $otherService->save();

        return back()->with('success', 'Other Service Updated successfully');
    }


    public function destroy(string $uuid)
    {
        $otherService = OtherService::where('uuid', $uuid)->first();

        if(!$otherService){
            return abort(404);
        }

        $otherService->delete();

        return redirect()->route('other-service.index')->with('success', 'Other Service deleted successfully');
    }
}
