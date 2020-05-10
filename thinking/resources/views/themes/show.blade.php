@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="card mt-5 w-75 mx-auto" style="width: 200px;">
    @include('themes.card')
      <div class="card-image pt-0">
        <img src ="{{ str_replace('public/', '/storage/', $theme->image) }}" style="height: 100%; width: 100%;">
      </div>

      @foreach((array)$theme->answers as $answer)
        <div class="font-weight-bold">{{ $answer->body }}</div>
      @endforeach
  </div>

  
  

@endsection