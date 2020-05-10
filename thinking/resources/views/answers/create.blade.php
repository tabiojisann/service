@extends('app')

@section('title', '回答投稿')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('answers.store', $theme) }}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label>回答</label>
                    <textarea name="body" required class="form-control" rows="5" placeholder=面白い答えを待ってます></textarea>
                  </div>
                  <input type="hidden" name="user_id" value="{{ Auth::id }}">
                  <input type="hidden" name="theme_id" value="{{ theme_id }}">
                <button type="submit" class="btn blue-gradient btn-block">回答を出す</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


