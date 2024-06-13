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


  <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label class="form-control" for="">Edit the post</label>
            <textarea class="form-control" name="" id="" rows="5"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



@endsection