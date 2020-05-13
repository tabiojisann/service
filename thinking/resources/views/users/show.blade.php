@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    @include('users.user')
    @include('users.tabs', ['hasThemes' => true, 'hasLikes' => false])
      @foreach($themes as $theme)
        <div class="card mt-5 w-50 mx-auto" style="width: 200px;">
          @include('themes.card')
            @isset($theme->image)
              <div class="card-image pt-0">
                <img  src ="{{ str_replace('public/', '/storage/', $theme->image) }}" style="height: 100%; width: 100%;">
              </div>
            @endisset
        </div>
      @endforeach
    </div>
@endsection