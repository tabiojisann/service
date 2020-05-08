<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Carbon\Carbon;


class PostController extends Controller
{
   public function showCreateForm()
   {
       $posts = Post::all();
       return view('posts.create', ['posts' => $posts]);
   }
   public function create(Request $request, Post $post)
   {
    
       $post = new Post();
    
       $post->title = $request->title;
       $post->content = $request->content;
       $post->image_url = $request->image_url->storeAs('public/post_images', isset($time).'_' .Auth::user()->id . '.jpg');
       $post->user_id = Auth::user()->id;

       $post->save();

    return redirect()->route('posts.create');
   }
   /**
    * 詳細ページ
    */
//    public function detail(Post $post)
//    {
//        return view('posts/detail', [
//            'title' => $post->title,
//            'content' => $post->content,
//            'user_id' => $post->user_id,
//        ]);        
//    }
}

