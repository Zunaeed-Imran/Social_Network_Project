

@if(count($errors) > 0)
 <div class="columns-2 md:columns-3">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
 </div>
@endif

@if (Session::has('message'))
  <div>
    {{Session::get('message')}}
  </div>
@endif