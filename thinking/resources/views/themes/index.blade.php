@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    @include('nav')
      @foreach($themes as $theme)
          @include('themes.card')
      @endforeach
  </div>
@endsection