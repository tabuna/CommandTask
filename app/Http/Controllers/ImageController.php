<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;


class ImageController extends Controller
{
    public function index($path)
    {


        if (Storage::disk('public')->exists($path)) {
            return response()->download(storage_path('app/public/' . $path));
        } else {
            abort(404);
        }


    }
}
