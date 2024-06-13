@extends('layouts.master')


@section('content')
 @include('includes.message-block')
  <section>
    <header>
      <h1 class="text-3xl">The Dashboard</h1>
    </header>
    <form action="{{ route('post.create') }}" method="post">
      <div>
        <textarea placeholder="Write" name="body" cols="30" rows="10">
        </textarea>
      </div>
      <button class="bg-[#5e03fc] 
                     text-[#ffd7d7] 
                     rounded p-1 
                     outline outline-offset-2">Create Post</button>
      <input type="hidden" value="{{ Session::token() }}" name="_token">               
    </form>
  </section>
  <section class="p-2">
    <div>
      <header>
        <h1 class="text-xl">What Other People Say</h1>
      </header>

      @foreach ($posts as $post)
      <article class="post">
        <p>{{ $post->body }}</p>
        <div>
          Posted By {{ $post->user->first_name }} on {{$post->created_at }}
          </div>
          <div class="interaction">
            <a href="#">Like</a> |
            <a href="#">Dislike</a> |
            @if (Auth::user() == $post->user)
             <a href="#">Edit</a> |
             <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
            @endif
            </div>
            </article>
      @endforeach
    </div>
  </section>

 <div id="edit-modal" role="dialog">
  <div class="post">
      <button class="bg-[#5e03fc] 
        text-[rgb(255,215,215)] 
          rounded p-1 
          outline outline-offset-2">Edit Post</button>
  </div>
  <div>
    <form class="form-group" action="" method="get">
      <label for="">Edit The Post</label>
      <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
    </form>
  </div>
  <div class="p-2">
      <button class="bg-[#5e03fc] 
        text-[#ffd7d7] 
          rounded p-1 
          outline outline-offset-2">Close</button>
      <button class="bg-[#5e03fc] 
        text-[#ffd7d7] 
          rounded p-1 
          outline outline-offset-2">Save Change</button>
  </div>
 </div>
@endsection