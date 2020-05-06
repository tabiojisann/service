@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    @include('nav')
      @foreach($themes as $theme)
        <a href="{{ route('themes.show', ['theme' => $theme]) }}">
          @include('themes.card')
        </a>  
      @endforeach
  </div>
@endsection