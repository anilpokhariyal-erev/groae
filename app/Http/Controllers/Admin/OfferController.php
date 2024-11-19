<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Assets\Utils;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Assets\ResponseMessage;
use App\Models\Freezone;

class OfferController extends Controller
{

    public function index(Request $request)
    {
        $offers = Offer::with('freezone')->orderBy('id', 'desc');

        if ($request->start_date && !$request->end_date) {
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if ($request->end_date && !$request->start_date) {
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ]);

        if ($request->start_date) {
            $offers = $offers->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        }

        if ($request->title) {
            $offers = $offers->where('title', 'LIKE', "%{$request->title}%");
        }

        $offers = $offers->paginate(Utils::itemPerPage);

        return view('admin.offer.offer_index', compact('offers'));
    }


    public function create()
    {
        $freezones = Freezone::where('status', 1)->get();
        return view('admin.offer.offer_create', compact('freezones'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'freezone' => 'required|integer|exists:freezones,id',
            'title' => 'required|string|max:100',
            'discount' => 'required|numeric|max:100',
            'description' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
        ], [
            'discount.numeric' => 'Discount must be a number.',
            'discount.max' => 'Discount cannot exceed 100.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]);

        try {

            $offer = Offer::where('freezone_id', $request->freezone)->first();

            if($offer){
                return back()->with('error', ResponseMessage::FreezoneAlreadyHaveOffer);
            }

            $originalName = 'offers/' . time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
            $imagePath = $request->file('image')->storeAs('public', $originalName);
            Storage::url($imagePath);
            $offer = new Offer;
            $offer->title = $request->title;
            $offer->discount = isset($request->discount) ? $request->discount : 0;
            $offer->description = $request->description;
            $offer->image = $imagePath;
            $offer->freezone_id = $request->freezone;
            $offer->save();

            return redirect()->route('offer.index')->with('success', ResponseMessage::OfferCreateMsg);
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
        $offer = Offer::where('id', $id)->first();
        $freezones = Freezone::where('status', 1)->get();
        if ($offer) {
            return view('admin.offer.offer_edit', compact('offer', 'freezones'));
        }
        return abort(404);
    }


    public function update(Request $request, string $id)
    {
        $offer = Offer::where('id', $id)->first();

        if (!$offer) {
            return abort(404);
        }

        $request->validate([
            'freezone' => 'required|integer|exists:freezones,id',
            'title' => 'required|string|max:100',
            'discount' => 'required|numeric|max:100',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
        ], [
            'discount.numeric' => 'Discount must be a number.',
            'discount.max' => 'Discount cannot exceed 100.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]);
        try {
            if ($request->file('image')) {
                $offer->image ? Storage::delete($offer->image) : '';
                $originalName = 'offers/' . time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
                $imagePath = $request->file('image')->storeAs('public', $originalName);
                Storage::url($imagePath);
                $offer->image = $imagePath;
            }

            $offer->title = $request->title;
            $offer->discount = isset($request->discount) ? $request->discount : 0;
            $offer->description = $request->description;
            $offer->freezone_id = $request->freezone;
            $offer->save();
            return back()->with('success', ResponseMessage::OfferUpdateMsg);
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function destroy(string $id)
    {
        $offer = Offer::where('id', $id)->first();
        if (!$offer) {
            return abort(404);
        }
        try {
            $offer->delete();
            return redirect()->route('offer.index')->with('success', ResponseMessage::OfferDeleteMsg);
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }
}
