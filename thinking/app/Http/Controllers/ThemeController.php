<?php

namespace App\Http\Controllers;

use \App\Theme;
use \App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ThemeRequest;
use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Theme::class, 'theme');
    }

    public function index() {

        $themes = Theme::all()->sortByDesc('created_at');
        // dd($themes);


        return view('themes.index', ['themes' => $themes]);
        }

        public function create()
    {
        return view('themes.create');    
    }

    public function store(ThemeRequest $request, Theme $theme) 
    {
        $theme->fill($request->all());
        $theme->user_id = $request->user()->id;
        $theme->save();
        return redirect()->route('themes.index'); 
    }

    public function edit(Theme $theme)
    {
        return view('themes.edit', ['theme' => $theme]);    
    }

    public function update(ThemeRequest $request, Theme $theme)
    {
        $theme->fill($request->all())->save();
        return redirect()->route('themes.index');
    }

    public function destroy(Theme $theme)
    {
        $theme->delete();
        return redirect()->route('themes.index');
    }

    public function show(Theme $theme)
    {
        return view('themes.show', ['theme' => $theme]);
    }

    
}
