@extends('layouts.app')
@section('content')




@foreach($posts as $post)<br>
  <p>タイトル：{{ $post->title }}</p>
  <p>ユーザーID:{{ $post->user_id }}</p>
  <p>画像：<img src ="{{ str_replace('public/', 'storage/', $post->image_url) }}"></p>
  <p>文章:{{ $post->content }}</p>
  
@endforeach <br>
<form method="post" action="{{ route('posts.create') }}" enctype="multipart/form-data">
 @csrf
       <div class="form"><br>
           <div class="form-title">
             <label for="title">タイトル</label> 
             <input class="" name="title" value="{{ old('title') }}">
           </div>

           <div class="form-image_url"> <br>
            <input type="file" name="image_url" multiple="multiple">
           </div>
   
           <div class="form-content"><br>
             <label for="content" class="form-content">内容</label> 
             <textarea class="" name="content" cols="50" rows="10">{{ old('content') }}</textarea>        
           </div>
           
           <div class="form-submit">
             <button type="submit">投稿する</button>
           </div>
       </div>
</form>
@endsection