@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
  @include('nav')
  @foreach($themes as $theme)
    <div class="card mt-3">
      <div class="card-body d-flex flex-row">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
        <div>
          <div class="font-weight-bold">
            {{ $theme->user->name }}
          </div>
          <div class="font-weight-lighter">
            {{ $theme->created_at->format('Y/m/d H:i') }}
          </div>
        </div>
      </div>
      <div class="card-body pt-0 pb-2">
        <h3>
          {{ $theme->body }}
        <h3>
      </div>
    </div>
    @endforeach
  </div>
@endsection