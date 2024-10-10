<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Assets\Utils;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::with(['customer'])->paginate(Utils::itemPerPage);
        return view('admin.transaction.transaction_list',compact('transaction'));
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'transaction_id' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'customer_id' => 'required|exists:customers,id',
            'payment_status' => 'required|string|max:255',
            'message' => 'nullable|string',
            'freezone_booking_id' => 'required|exists:freezone_bookings,id', // Ensure this is included
        ]);

        // Create a new transaction and link it to a FreezoneBooking
        Transaction::create([
            'transaction_id' => $validatedData['transaction_id'],
            'amount' => $validatedData['amount'],
            'customer_id' => $validatedData['customer_id'],
            'payment_status' => $validatedData['payment_status'],
            'message' => $validatedData['message'] ?? null,
            'freezone_booking_id' => $validatedData['freezone_booking_id'], // Make sure to associate it here
        ]);

        return redirect()->route('transaction.index')->with('success', 'Transaction created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        // Ensure you are eager loading the related models
        $transaction->load('customer', 'freezone_booked.freezone');
        return view('admin.transaction.transaction_detail', compact('transaction'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
