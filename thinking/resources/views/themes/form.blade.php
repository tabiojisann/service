@csrf
<!-- <div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div> -->
<div class="form-group">
  <label>お題</label>
  <textarea name="body" required class="form-control" rows="5" placeholder="好きなテーマを書いてください">{{ $theme->body ?? old('body') }}</textarea>
</div>
<div class="form-group">
  <label>画像（任意）</label>
  <input type="file" name="image"  class="form-control" >
</div>

 

