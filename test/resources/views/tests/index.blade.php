<h1>画像投稿から保存まで</h1>


<form name='image' method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name='image'><br/>


  <input type="submit" name='confirm'>
</form> 