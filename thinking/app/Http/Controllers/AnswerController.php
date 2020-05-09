<?php

namespace App\Http\Controllers;

use App\Theme;

use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;

class AnswerController extends Controller
{

  public function create()
  {
      return view('answers.create');    
  }



  public function store(AnswerRequest $request, Answer $answer)
  {
      $answer->fill($request->all());

      $answer->user_id = $request->user()->id;
      $answer->save();
      return redirect()->route('themes.show');
  }
}
