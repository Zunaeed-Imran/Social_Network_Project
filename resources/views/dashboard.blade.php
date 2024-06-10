@extends('layouts.master')


@section('content')
  <section>
    <header>
      <h1 class="text-3xl">The Dashboard</h1>
    </header>
    <form action="{{ route('post.create') }}" method="post">
      <div>
        <textarea name="body" cols="30" rows="10" placeholder="write">
          Write Something.
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
      <article class="p-1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur inventore obcaecati magni ab vel! Culpa quisquam voluptatibus explicabo id aperiam quasi delectus omnis ipsum, necessitatibus maxime non eos perspiciatis? Exercitationem?</p>
        <div>
          Posted By Imran on 10 june 2024
        </div>
        <div>
          <a href="#">Like</a> |
          <a href="#">Dislike</a> |
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </div>
      </article>
      <article class="p-1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur inventore obcaecati magni ab vel! Culpa quisquam voluptatibus explicabo id aperiam quasi delectus omnis ipsum, necessitatibus maxime non eos perspiciatis? Exercitationem?</p>
        <div>
          Posted By Imran on 10 june 2024
        </div>
        <div>
          <a href="#">Like</a> |
          <a href="#">Dislike</a> |
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </div>
      </article>
    </div>
  </section>
@endsection