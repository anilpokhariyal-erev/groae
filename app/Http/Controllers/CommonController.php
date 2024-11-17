<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommonController extends Controller
{

    public function ckeditorImageUpload(Request $request)
    {
        try {
            // Validate the uploaded image
            $request->validate([
                'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            ]);

            // Generate the file path
            $originalName = 'ckeditor/' . time() . '_' . str_replace(' ', '_', $request->file('upload')->getClientOriginalName());

            // Store the file
            $imagePath = $request->file('upload')->storeAs('public', $originalName);

            // Generate the public URL to access the image
            $url = Storage::url($imagePath);  // 'storage/ckeditor/{image_name}'

            // Return the successful response with the URL
            $response = [
                'uploaded' => 1,
                'fileName' => basename($originalName),
                'url' => $url,
            ];

            return response()->json($response);
        } catch (\Exception $e) {
            // Handle any errors and return the response
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
