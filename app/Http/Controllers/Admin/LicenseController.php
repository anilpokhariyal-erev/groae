<?php

namespace App\Http\Controllers\Admin;

use App\Models\License;
use App\Assets\Utils;
use App\Models\Freezone;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{
    // List all licenses with filtering options
    public function index(Request $request)
    {
        $licenses = License::with('freezone')->orderBy('id', 'DESC');
        
        if ($request->title) {
            $licenses->where('name', 'LIKE', "%{$request->title}%");
        }

        if ($request->start_date) {
            $licenses = $licenses->whereDate('created_at', '>=', $request->start_date);
        }

        if ($request->end_date) {
            $licenses = $licenses->whereDate('created_at', '<=', $request->end_date);
        }

        if ($request->start_date && $request->end_date) {
            $licenses = $licenses->whereDate('created_at', '>=', $request->start_date)
                                 ->whereDate('created_at', '<=', $request->end_date);
        }

        $licenses = $licenses->paginate(Utils::itemPerPage);
        return view('admin.license.license-index', compact('licenses'));
    }

    // Show create license form
    public function create()
    {
        $freezones = Freezone::all();
        return view('admin.license.license-create', compact('freezones'));
    }

    // Store new license
    public function store(Request $request)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string|max:1000',
        ]);

        try {
            $license = new License();
            $license->freezone_id = $request->freezone;
            $license->name = $request->name;
            $license->price = $request->price;
            $license->description = $request->description ?? '';
            $license->save();

            return redirect()->route('license.index')->with('success', 'License successfully created.');
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    // Show edit license form
    public function edit(string $id)
    {
        $freezones = Freezone::all();
        $license = License::with('freezone')->findOrFail($id);
        return view('admin.license.license-edit', compact('license', 'freezones'));
    }

    // Update existing license
    public function update(Request $request, string $id)
    {
        $request->validate([
            'freezone' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string|max:1000',
        ]);

        try {
            $license = License::findOrFail($id);
            $license->freezone_id = $request->freezone;
            $license->name = $request->name;
            $license->price = $request->price;
            $license->description = $request->description ?? '';
            $license->save();

            return redirect()->route('license.index')->with('success', 'License successfully updated.');
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    // Delete a license
    public function destroy(string $id)
    {
        try {
            $license = License::findOrFail($id);
            $license->delete();

            return back()->with('success', 'License successfully deleted.');
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }
}
