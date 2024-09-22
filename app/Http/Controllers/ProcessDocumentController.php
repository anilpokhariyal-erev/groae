<?php

namespace App\Http\Controllers;

use App\Assets\Utils;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\ProcessDocument;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportProcessDocument;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\RequestProcessDocumentNotification;

class ProcessDocumentController extends Controller
{

    public function index(Request $request)
    {
        $processDocuments = ProcessDocument::with('customer');

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
            $processDocuments = $processDocuments->whereBetween('created_at', [$request->start_date.' 00:00:00', $request->end_date.' 23:59:59']);
        }

        if($request->status){
            $processDocuments = $processDocuments->where('status', $request->status);
        }

        if($request->name){
            $name = $request->name;

            $processDocuments = $processDocuments->whereHas('customer', function ($query) use ($name) {
                                    $query->where('name', 'LIKE', "%{$name}%");
                                });
        }

        if($request->export){
            $processDocuments = $processDocuments->select('license_type','no_of_visa_required','no_of_shareholder','document_type','document_name','document_format','additional_detail','status','customer_id','freezone_id')
                                                    ->with(['customer' => function($query){ $query->first(); },
                                                            'freezone' => function($query){ $query->select('id', 'name')->first(); }])->get();

            return Excel::download(new ExportProcessDocument($processDocuments), 'process_documents.xlsx');
        }

        $processDocuments = $processDocuments->orderBy('id', 'desc')->paginate(Utils::itemPerPage);

        return view('process-documents.process_document_index', compact('processDocuments'));
    }


    public function create()
    {
        return view('process-documents.process_document_create');
    }


    public function processDocumentRequest($uuid)
    {
        return view('process-documents.process_document_request', compact('uuid'));
    }


    public function customerDetailRequest($uuid)
    {
        $customer = Customer::where('uuid', $uuid)->first();

        if($customer){
            return view('process-documents.process_customer_detail_create', compact('customer'));
        }
        return abort(404);
    }


    public function customerDetailShow($uuid)
    {
        $processDocument = ProcessDocument::with('customer')->where('uuid', $uuid)->first();

        if($processDocument->document_type){
            return view('process-documents.process_customer_document_show', compact('processDocument'));
        } else {
            return view('process-documents.process_customer_detail_show', compact('processDocument'));
        }

        return abort(404);
    }


    public function requestCustomerDetail(Request $request, $uuid){

        $customer = Customer::select('id','name','email')->where('uuid', $uuid)->first();

        if($customer){

            $customerRequest = new ProcessDocument;
            $customerRequest->customer_id = $customer->id;
            $customerRequest->additional_detail = json_encode($request->additions);
            $customerRequest->request_type = 'customer_data';
            $customerRequest->status = 'Pending';
            $customerRequest->save();

            $customer->notify(new RequestProcessDocumentNotification($customer->email));

            return Redirect::route('customer.show',['uuid' => $uuid])->with('success', 'Requested Data successfully');
        }

        return back()->with('error', 'The customer ID is missing or invalid.');
    }


    public function requestCustomerDocument(Request $request, $uuid){

        $customer = Customer::select('id','name','email')->where('uuid', $uuid)->first();

        if($customer){

            $request->validate([
                'document_type' => 'required|string|max:100',
                'document_name' => 'required|string|max:100',
                'document_format' => ['required', 'array', Rule::in(['png', 'jpeg', 'doc,docx']),],
                // 'document_format.*' => 'in:png,jpeg,doc,docx',
            ]
            // ,[
            //     'document_format.*' => 'The selected document format is invalid.',
            // ]
            );

            // $originalName = time().'_'.$request->file('document_format')->getClientOriginalName();
            // $image_path = $request->file('document_format')->storeAs('public/document_format', $originalName);

            $customerRequest = new ProcessDocument;
            $customerRequest->document_type = $request->document_type;
            $customerRequest->document_name = $request->document_name;
            $customerRequest->document_format_type = json_encode($request->document_format);
            $customerRequest->customer_id = $customer->id;
            $customerRequest->request_type = 'document';
            $customerRequest->status = 'Pending';
            $customerRequest->save();

            $customer->notify(new RequestProcessDocumentNotification($customer->email));

            return Redirect::route('customer.show',['uuid' => $uuid])->with('success', 'Requested Data successfully');
        }

        return back()->with('error', 'The customer ID is missing or invalid.');
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
