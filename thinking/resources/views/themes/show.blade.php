@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="card mt-5 w-75 mx-auto" style="width: 200px;">
    @include('themes.card')
      <div class="card-image pt-0">
        <img src ="{{ str_replace('public/', '/storage/', $theme->image) }}">
      </div>
  </div>
@endsection