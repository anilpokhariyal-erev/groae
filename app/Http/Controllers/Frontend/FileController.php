<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    function download($path)
    {
        $path = str_replace('|', '/', $path);
        if (!Storage::exists($path)) abort(404);
        if (explode('/', $path)[1] != auth()->guard('customer')->user()->uuid) return abort(404);

        return Storage::download($path);
    }

    function admin_download($path)
    {
        $path = str_replace('|', '/', $path);

        if (!Storage::exists($path)) {
            abort(404);
        }

        if (auth()->check()) {
            return Storage::download($path);
        }

        return abort(404);
    }
}
