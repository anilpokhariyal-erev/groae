<?php

namespace App\Http\Controllers\Admin;

use App\Assets\ResponseMessage;
use App\Assets\Utils;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\ContactUsReply;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactUsReplyNotification;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        $contact_us = ContactUs::orderBy('id', 'desc');

        if($request->start_date && !$request->end_date){ 
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if($request->end_date && !$request->start_date){ 
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ]);

        if($request->start_date){
            $contact_us = $contact_us->whereBetween('created_at', [$request->start_date.' 00:00:00', $request->end_date.' 23:59:59']);
        }


        if($request->name){ 
            $name = $request->name;
            $contact_us = $contact_us->where(function($query) use($name) {
                        return $query->where('first_name', 'LIKE', "%{$name}%")
                        ->orWhere('last_name', 'LIKE', "%{$name}%")
                        ->orWhere('email', 'LIKE', "%{$name}%")
                        ->orWhere('mobile_number', 'LIKE', "%{$name}%");
                        });
        }

        if($request->request_type){ 
            $contact_us = $contact_us->where('type', $request->request_type);
        }

        if($request->status){ 
            $contact_us = $contact_us->where('status', $request->status);
        }

        $contact_us = $contact_us->get();

        return view('admin.contact-us.contact_us_index', compact('contact_us'));
    }


    public function edit(string $id)
    { 
        $contact_detail = ContactUs::where('id', $id)->with(['contactUsReply' => function($query){
            $query->with(['sender' => function($query){
                $query->select('id', 'name');
            }]);
        }])->first();

        if($contact_detail){
            if($contact_detail->status == 'unread'){ 
                ContactUs::where('id', $id)->update(['status'=>'read']);
            }
            return view('admin.contact-us.contact_us_edit', compact('contact_detail'));
        }

        return abort(404);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $contact_detail = ContactUs::where('id', $id)->first();

        if(!$contact_detail){
            return back()->with('error', ResponseMessage::ContactDetailNotFound);
        }

        try {

            $notification = new ContactUsReplyNotification($contact_detail->first_name, $request->message);

            Notification::route('mail', $contact_detail->email)->notify($notification);
    
            $contact_detail->contactUsReply()->create([
                'sender_id' => Auth::user()->id,
                'to_email' => $contact_detail->email,
                'message' => $request->message
            ]);
    
            return back()->with('success', ResponseMessage::ReplySentSuccessfully);

        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }


    }

    public function get_unread_count(){
        return ContactUs::where('status', 'unread')->count();
    }

}
