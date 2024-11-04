<?php

namespace App\Http\Controllers;

use App\Assets\Utils;
use App\Models\Freezone;
use App\Models\FreezonePage;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use Illuminate\Support\Facades\Storage;

class FreezonePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $freezone_pages = FreezonePage::with('freezone');

        if ($request->name) {
            $freezone_pages->where('title', 'LIKE', "%{$request->name}%");
        }

        if ($request->start_date) {
            $freezone_pages = $freezone_pages->whereDate('created_at', '>=', $request->start_date);
        }

        if ($request->end_date) {
            $freezone_pages = $freezone_pages->whereDate('created_at', '<=', $request->end_date);
        }

        if ($request->start_date && $request->end_date) {
            $freezone_pages = $freezone_pages->whereDate('created_at', '>=', $request->start_date)->whereDate('created_at', '<=', $request->end_date);
        }

        $freezone_pages = $freezone_pages->where('status', 1)->get();

        return view('admin.freezone.freezone_page_list', compact('freezone_pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $freezone = Freezone::get();
        return view('admin.freezone.freezone_page_create', compact('freezone'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'file' => 'nullable|file|mimes:pdf'
        ]);

        try {
            $freezone_page = new FreezonePage();
            $freezone_page->freezone_id = $request->freezone;
            $freezone_page->title = $request->title;
            $freezone_page->content = $request->content;

            if ($request->file('file')) {
                $originalName = 'freezone_pages/' . time() . '_' . str_replace(' ', '_', $request->file('file')->getClientOriginalName());
                //$file_path = $request->file('file')->storeAs('public/freezone', $originalName);
                Storage::put($originalName, file_get_contents($request->file('file')), 'public');
                $freezone_page->file = $originalName;
            }

            $freezone_page->slug = str_replace('-', ' ', $request->title);
            $freezone_page->save();
            return back()->with('success', ResponseMessage::FreezonePageCreate);
        } catch (\Exception $e) {
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
        $freezone_page = FreezonePage::where('id', $id)->first();

        if (!$freezone_page) {
            return abort(404);
        }
        $freezone = Freezone::get();
        return view('admin.freezone.freezone_page_edit', compact('freezone', 'freezone_page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $freezone_page = FreezonePage::where('id', $id)->first();

        if (!$freezone_page) {
            return abort(404);
        }

        $request->validate([
            'freezone' => 'required|numeric',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'file' => 'nullable|file|mimes:pdf'
        ]);

        try {
            $freezone_page->freezone_id = $request->freezone;
            $freezone_page->title = $request->title;
            $freezone_page->content = $request->content;

            if ($request->file('file')) {
                $originalName = 'freezone_pages/' . time() . '_' . str_replace(' ', '_', $request->file('file')->getClientOriginalName());
                //$file_path = $request->file('file')->storeAs('public/freezone', $originalName);
                Storage::put($originalName, file_get_contents($request->file('file')), 'public');
                $freezone_page->file = $originalName;
            }

            //$freezone_page->slug = trim(str_replace(' ', '-', strtolower($request->title)));  
            $freezone_page->status = $request->status;
            $freezone_page->save();
            return back()->with('success', ResponseMessage::FreezonePageUpdate);
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
