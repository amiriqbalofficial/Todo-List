@extends('layouts.app')
@section('content')
<h2 class="text-primary text-center">CREATE NEW TODO</h2>
<div class="col-md-8 offset-2">
<form method="post" action="todos">
  @csrf

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" placeholder="Enter todo title here" name="title">
  </div>
  <div class="form-group">
    <label for="due">Content</label>
    <input type="text" class="form-control" placeholder="Enter Content here" name="content">
  </div>
  <div class="form-group">
    <label for="due">Due</label>
    <input type="text" class="form-control" placeholder="Enter Due here" name="due">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection
