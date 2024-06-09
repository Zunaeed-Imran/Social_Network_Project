@extends('layouts.master')



@section('title')
  <h2>This is Title</h2>
@endsection

@section('content')

@if(count($errors) > 0)
 <div class="columns-2 md:columns-3">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
 </div>
@endif

<div>
  <form action="{{ route('signup') }}" class="flex justify-center" method="post">
    <div class="space-y-12">
      <div>
        <h2 class="text-base font-semibold leading-7 text-gray-900">Sing Up</h2>
      </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
              <input id="name" name="first_name" type="name" autocomplete="name" class="block w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input id="email" name="password" type="password" autocomplete="password" class="block w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="m-2 p-2 border-b border-gray-900/10 pb-12">
            <button class="bg-blue-500 p-1 rounded">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </div>
  </form>
</div>

<div>
  <form action="{{ route('signin') }}" method="post" class="flex justify-center">
    <div class="space-y-12">
      <div>
        <h2 class="text-base font-semibold leading-7 text-gray-900">Sing In</h2>
      </div>

          <div class="sm:col-span-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input id="email" name="password" type="password" autocomplete="password" class="block w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="m-2 p-2">
            <button class="bg-blue-500 p-1 rounded" type="submit">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </div>
  </form>
</div>
@endsection