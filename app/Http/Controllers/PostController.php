<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function getDashboard()
  {
    return view('dashboard');
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
}