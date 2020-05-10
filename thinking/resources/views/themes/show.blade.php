@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="card mt-5 w-50 mx-auto" style="width: 200px;">
    @include('themes.card')
  
    <!-- 画像データが入力されてたら表示する。なかったらしない -->
    @isset($theme->image)
      <div class="card-image pt-0">
        <img src ="{{ str_replace('public/', '/storage/', $theme->image) }}" style="height: 100%; width: 100%;">
      </div>
    @endisset

    <!-- 投稿者本人がコメントできないように -->
    @if( Auth::id() !== $theme->user_id )
    <a href="{{ route('answers.create', $theme) }}">
      <button type="button" class="btn btn-success">回答</button>
    </a>
    @endif
  </div>
 
  
  @foreach($theme->answers as $answer)
  <div class="card mt-5 w-50 mx-auto" style="width: 200px;">
    <div class="card-body d-flex flex-row">
      <i class="fas fa-user-circle fa-2x mr-1 " ></i>
      <div>
        <div class="font-weight-bold">{{ $answer->user->name }}</div>
        <div class="font-weight-lighter">{{ $answer->created_at->format('Y/m/d H:i') }}</div>
        <div class="font-weight-bold">{{ optional($answer)->body }}</div>
      </div>

    </div>
  </div>
  @endforeach
</div>
  
  
@endsection