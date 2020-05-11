<?php

namespace App\Http\Controllers;

use App\Theme;
use App\Answer;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;
use App\Http\Requests\ThemeRequest;

class AnswerController extends Controller
{

  

  public function store(AnswerRequest $request, Answer $answer, Theme $theme, User $user)
  {
    

      $answer->fill($request->all());
      // $theme->answers()->save($answer);
      $answer->save();
      
      return redirect('/');
  
  }

}


 