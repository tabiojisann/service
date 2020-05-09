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
              <form method="POST" action="{{ route('answers.store') }}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label>答える</label>
                    <textarea name="body" required class="form-control" rows="5" placeholder=面白い答えを待ってます></textarea>
                  </div>
                <button type="submit" class="btn blue-gradient btn-block">回答を出す</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


