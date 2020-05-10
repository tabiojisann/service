@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    @include('nav')
      @foreach($themes as $theme)
      <div class="card mt-5 w-50  mx-auto" style="width: 200px;">
        
          @include('themes.card')
          
          @isset($theme->image)
            <div class="card-image pt-0">
              <img src ="{{ str_replace('public/', 'storage/', $theme->image) }}"style="height: 100%; width: 100%;">
            </div>
          @endisset

        </a>
      </div>
      @endforeach
  </div>
@endsection