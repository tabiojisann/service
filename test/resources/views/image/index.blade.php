<div class="container">

   <h3>画像投稿</h3>

      <form action="{{ route('upload') }}" method="POST"  enctype="multipart/form-data">
         @csrf

         <div class="form-group">
            <input type="file" name="uplord_image" class="form-control-file">
         </div> <br>

         <button type="submit" class="btn btn-outline-primary btn-block">アップロード</button>

</div>
