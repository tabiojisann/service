<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index() {
        
        $themes = [
            (object) [
                'id' => 1,
                'body' => "お題",
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'しほりん',
                ],
            ],
            (object) [
                'id' => 2,
                'body' => "お題2",
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'パパ',
                ],
            ],
            (object) [
                'id' => 3,
                'body' => "お題3",
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'ママ',
                ],
            ],
        ];

        return view('themes.index', ['themes' => $themes]);
        }
}
