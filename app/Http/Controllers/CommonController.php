<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommonController extends Controller
{

    public function ckeditorImageUpload(Request $request)
    {
        try {

            $request->validate([
                'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            ]);

            // $originalName = time().'_'.$request->file('upload')->getClientOriginalName();
            // $imagePath = $request->file('upload')->storeAs('public/freezone/ckeditor', $originalName);

            $originalName = 'ckeditor/' . time() . '_' . str_replace(' ', '_', $request->file('upload')->getClientOriginalName());
            Storage::put($originalName, file_get_contents($request->file('upload')), 'public');

            $response = [
                'uploaded' => 1,
                'fileName' => basename($originalName),
                'url' => Storage::url($originalName),
                // 'url' => Storage::url($originalName),
            ];

            return response()->json($response);
        } catch (\Exception $e) {

            $errorResponse = [
                'uploaded' => 0,
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ];

            return response()->json($errorResponse, 500);
        }
    }
}
