@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    @include('nav')
      @foreach($themes as $theme)
      <div class="card mt-5 ">
        
          @include('themes.card')
            <div class="card-image pt-0 mx-auto" style="width: 200px;">
              <img src ="{{ str_replace('public/', 'storage/', $theme->image) }}">
            </div>
        </a>
      </div>
      @endforeach
  </div>
@endsection