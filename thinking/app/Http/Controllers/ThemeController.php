<?php

namespace App\Http\Controllers;

use \App\Theme;
use \App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index() {

        $themes = Theme::all()->sortByDesc('created_at')->paginate(3);
        // dd($themes);


        return view('themes.index', ['themes' => $themes, 'users' => $users]);
        }
}
