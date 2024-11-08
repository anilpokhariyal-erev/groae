<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\FixedFee;
use App\Models\Freezone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FixedFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all fixed fees with pagination for easy display
        $fixedFees = FixedFee::paginate(10);

        return view('admin.fixed_fees.index', compact('fixedFees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all freezones for the dropdown in the form
        $freezones = Freezone::all();

        return view('admin.fixed_fees.create', compact('freezones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(),[
            'label' => 'required|string|max:255',
            'description' => 'nullable|string',
            'freezone_id' => 'required|exists:freezones,id',
            'type' => 'required|string|max:255',
            'value' => 'required|numeric|min:0',
            'status' => 'required|boolean',
        ]);

        if($validator->fails()){
            return redirect()->route('fixed-fee.create')->withErrors($validator)->withInput();
        }
        // Create the new fixed fee entry
        FixedFee::create($request->all());

        return redirect()->route('fixed-fee.index')->with('success', 'Fixed Fee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FixedFee $fixedFee)
    {
        return view('admin.fixed_fees.show', compact('fixedFee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $freezones = Freezone::all();
        $fixedFee = FixedFee::findOrFail($id);
        return view('admin.fixed_fees.edit', compact('fixedFee', 'freezones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $fixedFee = FixedFee::findOrFail($id);
        // Validate the incoming data
        $validator = Validator::make($request->all(),[
            'label' => 'required|string|max:255',
            'description' => 'nullable|string',
            'freezone_id' => 'required|exists:freezones,id',
            'type' => 'required|string|max:255',
            'value' => 'required|numeric|min:0',
            'status' => 'required|boolean',
        ]);

        if($validator->fails()){
            return redirect()->route('fixed-fee.edit')->withErrors($validator)->withInput();
        }

        // Update the fixed fee entry
        $fixedFee->update($request->all());

        return redirect()->route('fixed-fee.index')->with('success', 'Fixed Fee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FixedFee $fixedFee)
    {
        // Soft delete the fixed fee entry
        $fixedFee->delete();

        return redirect()->route('fixed-fees.index')->with('success', 'Fixed Fee deleted successfully.');
    }
}
