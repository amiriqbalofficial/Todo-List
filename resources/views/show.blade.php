@extends('layouts.app')

@section('content')
<div class="col-sm-8">
<a href="{{route('home')}}"><input type="button" name="" value="GO BACK" class="btn btn-primary"></a>
<h3>TODO TITLE: <span style class="text-success text-uppercase font-weight-bold"> {{$todo->title}}</span></h3>

<li class="text-uppercase">Title: {{$todo->title}}</li>
<li>Content: {{$todo->content}}</li>
<div class="badge badge-danger"><li>Due : {{$todo->due}}</li></div><br>
<form method="post" action="/todos/{{$todo->id}}">
  @csrf
  @method('DELETE')
<button type="submit" class="btn btn-danger float-right mb-2" name="button">Delete</button>
</form>
<a href="{{$todo->id}}/edit" class="btn btn-primary">Edit</a>




@endsection
