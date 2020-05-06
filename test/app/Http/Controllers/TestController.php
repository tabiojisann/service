<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = '山田太郎';

        return view('test', ['name' => $name]);

    }
    
}
