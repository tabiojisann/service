<?php

namespace App\Http\Controllers;

use \App\Theme;
use \App\User;

use \App\Answer;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ThemeRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Theme::class, 'theme');
    }

    public function index(User $user) {

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
      
        if (isset($theme->image)) {
            $file_name = $request->image->getClientOriginalName();
            $theme->image = $request->image->storeAs('public/theme_images', isset($time).'_' .Auth::user()->id . $file_name);
          }
           
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
        $theme->fill($request->all());

        if (isset($theme->image)) {
            $file_name = $request->image->getClientOriginalName();
            $theme->image = $request->image->storeAs('public/theme_images', isset($time).'_' .Auth::user()->id . $file_name);
        }


        

        
        $theme->save();
        return redirect()->route('themes.index');
    }

    public function destroy(Theme $theme)
    {
        $theme->delete();
        Storage::Delete($theme->image);
        return redirect()->route('themes.index');
    }

    public function show(Theme $theme, Answer $answer, User $user)
    {
        // $answers = Answer::where($theme)->orderBy('created_at', 'desc');
        $answers = Answer::all()->sortByDesc('created_at');
        return  view('themes.show', 
                    ['theme' => $theme, 
                    'answers' => $answers, 
                    'user' => $user]);
            
    }

    
    
}
