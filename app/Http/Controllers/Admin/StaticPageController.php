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
        $static_pages = StaticPage::orderBy('id', 'desc')->get();
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
            'description' => 'required|string',
        ]);

        try{
            $page_name = $request->page_name;
            $static_page = new StaticPage;
            $static_page->page_name = $page_name;
            $static_page->description = $request->description;
            $static_page->image = NULL;
            $static_page->slug = trim(str_replace(' ','-',strtolower($page_name)));
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
            $pages = StaticPage::where('id','!=', $id)->whereNull('parent_id')->get();
            return view('admin.static-page.static_page_edit', compact('static_page', 'pages'));
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
            'parent_id' => 'nullable|integer|exists:static_pages,id',
            'visible_in_footer' => 'nullable|in:on',
            'visible_in_header' => 'nullable|in:on',
            'description' => 'required|string',
        ]);

        try{
            $static_page->page_name = $request->page_name;
            $static_page->parent_id = $request->parent_id ?? null;
            $static_page->visible_in_footer = $request->has('visible_in_footer') ? 1 : 0;
            $static_page->visible_in_header = $request->has('visible_in_header') ? 1 : 0;
            $static_page->description = $request->description;
            $static_page->save();

            return back()->with('success', ResponseMessage::PageUpdateMsg);
        }catch(\Exception){ 
            return back()->with('error', ResponseMessage::WrongMsg);
        }

    }


    public function destroy(string $id)
    {
        $static_page = StaticPage::where('uuid', $id)->first();

        if(!$static_page){
            return abort(404);
        }

        if(StaticPage::where('parent_id', $static_page->id)->count()){
            return redirect()->route('static-page.index')->with('errors', ['Static Page can not be deleted as it has child pages.']);
        }

        $static_page->delete();

        return redirect()->route('static-page.index')->with('success', 'Static Page deleted successfully');
    }

}
