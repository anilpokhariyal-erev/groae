<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Models\PackageBooking;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Models\FreezoneBooking;
use Illuminate\Validation\Rule;
use App\Models\CustomerDocument;
use App\Models\CustomerDownload;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class CustomerDocumentController extends Controller
{

    public function send_document_request(string $booking_id)
    {
        $booking_detail = PackageBooking::where('id', $booking_id)->first();

        if (!$booking_detail) {
            return abort(404);
        }

        return view('admin.process-document.send_document_request', compact('booking_detail'));
    }

    public function store_document_request(Request $request)
    {
        $request->validate([
            'booking_id' => 'required',
            'booking_type' => 'required|string|in:document,detail',
            'document_name' => 'required|string|max:100',
            'document_type' => 'required|string|max:100',
            // 'document_format' => ['required_if:booking_type,document', 'array', Rule::in(['pdf','doc']),],
            'document_format' => ['required_if:booking_type,document', 'array', Rule::in(['pdf','doc','jpeg','png','jpg']),],
        ]);

        try {

            if ($request->input('document_format') && in_array('doc', $request->input('document_format'))) {
                $request->merge(['document_format' => array_merge($request->input('document_format'), ['docx'])]);
            }

            $booking_detail = PackageBooking::select('customer_id')->where('id', $request->booking_id)->first();

            if (!$booking_detail) {
                return abort(404);
            }

            $customerDocument = new CustomerDocument();
            $customerDocument->name = $request->document_name;
            $customerDocument->type = $request->document_type;
            $customerDocument->request_type = $request->booking_type;
            $customerDocument->format = $request->document_format;
            $customerDocument->customer_id = $booking_detail->customer_id;
            $customerDocument->save();

             return redirect()
            ->route('package-bookings.documents', $request->booking_id)
            ->with('success', 'Document submitted successfully');
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    public function reject_document(Request $request)
    {
        $request->validate([
            'document_id' => 'required|exists:customer_documents,id',
            'additional_comment' => 'nullable|string|max:1000',
        ]);

        try {
            $document = CustomerDocument::find($request->document_id);

            if (!$document) {
                return back()->with('error', ResponseMessage::InvalidDocumentId);
            }

            $document->status = 'rejected';
            $document->additional_comment = $request->additional_comment;
            $document->save();

            return back()->with('success', 'Document rejected successfully');
        } catch (\Exception $e) {
            Log::error('Document Rejection Error: ' . $e->getMessage());
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function approve_document(Request $request)
    {
        $request->validate([
            'document_id' => 'required',
        ]);

        try {

            $document = CustomerDocument::where('id', $request->document_id)->first();

            if(!$document) {
                return back()->with('error', ResponseMessage::InvalidDocumentId);
            }

            $document->status = 'approved';
            $document->save();
            return back()->with('success', 'Document approved successfully');
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    public function upload_document($booking_id)
    {
        $booking_detail = PackageBooking::where('id', $booking_id)->first();
        $customerdownloads = CustomerDownload::where('customer_id', $booking_detail->customer_id)->get();

        return view('admin.process-document.upload_documents', compact('booking_detail', 'customerdownloads'));
    }

    public function save_upload_documents(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'document_name' => 'required|string|max:100',
            'uploads' => 'required|file|mimes:pdf'
        ]);

        $user = Customer::find($request->customer_id);
        $upload = $request->file('uploads');

        if ($upload) {
            // Construct the file path
            $filePath = $user->uuid . '/' . time() . '_' . str_replace(' ', '_', $upload->getClientOriginalName());
            
            // Store the file
            $upload->storeAs('customer_downloads', $filePath);

            // Save the relative file path to the database
            $user->customer_downloads()->create([
                'name' => $request->document_name,
                'size' => $upload->getSize(),
                'value' => $filePath, // Save only the relative path
                'package_booking_id' => $request->package_booking_id,
            ]);

            return back()->with('success', 'Documents uploaded successfully.');
        }

        return back()->with('error', 'Something went wrong.');
    }

}
