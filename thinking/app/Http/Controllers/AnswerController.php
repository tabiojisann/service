<?php

namespace App\Http\Controllers;

use App\Theme;
use App\Answer;

use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;

class AnswerController extends Controller
{

  public function create(Theme $theme, Answer $answer)
  {
      return view('answers.create', ['theme' => $theme, 'answer' => $answer]);    
  }



  public function store(AnswerRequest $request, Answer $answer)
  {
      $answer->fill($request->all());

      $answer->user_id = $request->user()->id;
      $answer->save();
      return redirect()->route('themes.show');
  }
}
