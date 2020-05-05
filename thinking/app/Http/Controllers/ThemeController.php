<?php

namespace App\Http\Controllers;

use \App\Theme;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index() {

        $themes = Theme::all()->sortByDesc('created_at');

        return view('themes.index', ['themes' => $themes]);
        }
}
