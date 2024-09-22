<?php

namespace App\Http\Controllers;

use App\Assets\Utils;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    public function index(Request $request)
    {
        $testimonials = Testimonial::orderBy('id', 'desc');

        if($request->name){ 
            $testimonials = $testimonials->where('customer_name', 'LIKE', "%{$request->name}%");
        }

        $testimonials = $testimonials->paginate(Utils::itemPerPage);

        return view('testimonial.testimonial_index', compact('testimonials'));
    }


    public function create()
    {
        return view('testimonial.testimonial_create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'customer_name' => 'required|string|max:100',
            'testimonial' => 'required|string|max:1000',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
        ],[
            'profile_image.image' => 'The file must be an image.',
            'profile_image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'profile_image.max' => 'The image size should not exceed 5MB.',
        ]);

        $originalName = time().'_'.$request->file('profile_image')->getClientOriginalName();
        $image_path = $request->file('profile_image')->storeAs('public/freezone/testimonial', $originalName);

        $testimonial = new Testimonial();
        $testimonial->customer_name = $request->customer_name;
        $testimonial->profile_image = $image_path;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uuid)
    {
        $testimonial = Testimonial::where('uuid', $uuid)->first();

        if($testimonial){
            return view('testimonial.testimonial_edit', compact('testimonial'));
        }
        return abort(404);
    }


    public function update(Request $request, string $uuid)
    {
        $testimonial = Testimonial::where('uuid', $uuid)->first();

        if(!$testimonial){
            return abort(404);
        }

        $request->validate([
            'customer_name' => 'required|string|max:100',
            'testimonial' => 'required|string|max:1000',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
        ],[
            'profile_image.image' => 'The file must be an image.',
            'profile_image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'profile_image.max' => 'The image size should not exceed 5MB.',
        ]);

        if($request->file('profile_image')){
            Storage::delete($testimonial->profile_image);
            $originalName = time().'_'.$request->file('profile_image')->getClientOriginalName();
            $image_path = $request->file('profile_image')->storeAs('public/freezone/testimonial', $originalName);
            $testimonial->profile_image = $image_path;
        }

        $testimonial->customer_name = $request->customer_name;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();

        return back()->with('success', 'Testimonial Updated successfully');

    }


    public function destroy(string $uuid)
    {
        $testimonial = Testimonial::where('uuid', $uuid)->first();

        if(!$testimonial){
            return abort(404);
        }

        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial deleted successfully');
    }

}
