<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function getDashboard()
  {
    $posts = Post::all();
    return view('dashboard', ['posts' => $posts]);
  }

  public function postCreatePost(Request $request){
    $this->validate($request, [
      'body' => 'required|max:1000'
    ]);

    $post = new Post();
    $post->body = $request['body'];
    $message = 'There was an error';
    if($request->user()->posts()->save($post)){
      $message = 'Post Sucessfully Created';
    }
    return redirect()->route('dashboard')->with(['message' => $message]);
  }
  public function getDeletePost($post_id){
    // $post = Post::find($post_id)->first_name; or
    $post = Post::where('id', $post_id)->first();
    $post->delete();
    return redirect()->route('dashboard')->with(['message' => "deleted Sucessful"]);
  }
}