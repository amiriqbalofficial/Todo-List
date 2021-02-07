@extends('layouts/app')
@section('content')
<div class="col-md-8 offset-2">
  <h2>EDIT TODO</h2>
<form method="post" action="/todos/{{$todo->id}}">
  @method('PUT')
  @csrf

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" placeholder="Enter todo title here" name="title" value="{{$todo->title}}">
  </div>
  <div class="form-group">
    <label for="due">Content</label>
    <input type="text" class="form-control" placeholder="Enter Content here" name="content" value="{{$todo->content}}">
  </div>
  <div class="form-group">
    <label for="due">Due</label>
    <input type="text" class="form-control" placeholder="Enter Due here" name="due" value="{{$todo->due}}">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection
