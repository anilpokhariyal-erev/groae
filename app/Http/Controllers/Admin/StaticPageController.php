<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Assets\Utils;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Assets\ResponseMessage;

class StaticPageController extends Controller
{

    public function index()
    {
        $static_pages = StaticPage::orderBy('id', 'desc')->paginate(Utils::itemPerPage);
        return view('admin.static-page.static_page_index', compact('static_pages'));
    }


    public function create()
    {
        return view('admin.static-page.static_page_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|string|max:100',
            //'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
            'description' => 'required|string',
        ]
        /*,[
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]*/
        );

        //$originalName = time().'_'.$request->file('image')->getClientOriginalName();
        //$image_path = $request->file('image')->storeAs('public/freezone/static_page', $originalName);

        try{
            $page_name = strtolower($request->page_name);
            $static_page = new StaticPage;
            $static_page->page_name = $page_name;
            $static_page->description = $request->description;
            //$static_page->image = $image_path;
            $static_page->image = NULL;
            $static_page->slug = trim(str_replace(' ','-',$page_name));
            $static_page->save();
            return redirect()->route('static-page.index')->with('success', ResponseMessage::PageCreateMsg);
        }catch(\Exception){
            return back()->with('error', ResponseMessage::WrongMsg);
        }
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
    public function edit(string $id)
    {
        $static_page = StaticPage::where('id', $id)->first();

        if($static_page){
            return view('admin.static-page.static_page_edit', compact('static_page'));
        }
        return abort(404);
    }


    public function update(Request $request, string $id)
    {
        $static_page = StaticPage::where('id', $id)->first();

        if(!$static_page){
            return abort(404);
        }

        $request->validate([
            'page_name' => 'required|string|max:100',
            //'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
            'description' => 'required|string',
        ]
        /*,[
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]*/
        );
        try{
            /*if($request->file('image')){
                Storage::delete($static_page->image);
                $originalName = time().'_'.$request->file('image')->getClientOriginalName();
                $image_path = $request->file('image')->storeAs('public/freezone/static_page', $originalName);
                $static_page->image = $image_path;
            }*/

            $static_page->page_name = strtolower($request->page_name);
            $static_page->description = $request->description;
            $static_page->save();

            return back()->with('success', ResponseMessage::PageUpdateMsg);
        }catch(\Exception){ 
            return back()->with('error', ResponseMessage::WrongMsg);
        }

    }


    public function destroy(string $uuid)
    {
        $static_page = StaticPage::where('id', $id)->first();

        if(!$static_page){
            return abort(404);
        }

        $static_page->delete();

        return redirect()->route('static-page.index')->with('success', 'Static Page deleted successfully');
    }

}
