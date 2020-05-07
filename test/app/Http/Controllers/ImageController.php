<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() 
    {
        return view('image.index');
    }

    public function upload(Request $request) 
    {
        $all = $request->all();

        return;
    }
}


