@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    @include('nav')
      @foreach($themes as $theme)
      <div class="card mt-3">
        
          @include('themes.card')
            <div class="card-image pt-0">
              <img src ="{{ str_replace('public/', 'storage/', $theme->image) }}">
            </div><br>
        </a>
      </div>
      @endforeach
  </div>
@endsection