@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="card mt-3">
    @include('themes.card')
      <div class="card-image pt-0">
        <img src ="{{ str_replace('public/', '/storage/', $theme->image) }}">
      </div>

      @foreach((array)$theme->answers as $answer)
        <div class="font-weight-bold">{{ $answer->body }}</div>
      @endforeach
  </div>

  
  

@endsection