<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact_us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactUsRequest $request)
    {
        ContactUs::create($request->all());
        return back()->with('success', ResponseMessage::CONTACT_US_SUBMIT);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
