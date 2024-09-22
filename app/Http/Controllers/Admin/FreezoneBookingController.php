<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\FreezoneBooking;
use App\Http\Controllers\Controller;
use App\Models\ProcessDocument;
use App\Assets\Utils;
use App\Models\Customer;


class FreezoneBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bookings = FreezoneBooking::with(['freezone','customer','license']);
        // $processDocuments = ProcessDocument::with('customer');
        /* if($request->start_date && !$request->end_date){ 
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
        }*/

        $bookings = $bookings->orderBy('id', 'desc')->paginate(Utils::itemPerPage);

        return view('admin.freezone-booking.booking_index', compact('bookings'));
    }


    public function update_booking_status(Request $request)
    {

        $request->validate([
            'bookingId' => 'required',
            'status' => 'required|in:requested,approved,rejected',
        ]);

        $booking = FreezoneBooking::findOrFail($request->bookingId);

        $booking->client_status = $request->status;
        $booking->save();

        return response()->json(['message' => 'Booking status updated successfully']);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FreezoneBooking $freezoneBooking, string $id)
    {
        $booking_detail = $freezoneBooking->with(['freezone','customer','license'])->where('id', $id)->first();

        if(!$booking_detail) {
            return abort(404);
        }

        $documents = $booking_detail->customer->customer_documents()->get();

        return view('admin.freezone-booking.booking_detail', compact('booking_detail','documents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FreezoneBooking $freezoneBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FreezoneBooking $freezoneBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FreezoneBooking $freezoneBooking)
    {
        //
    }

    
}
