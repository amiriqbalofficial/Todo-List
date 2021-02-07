@extends('layouts/app')
    @section('content')



        <div class="col-sm-8">
          <h1 class="bg-primary">TODO LISTT</h1>
          @if (count($todo) > 0)
          @foreach($todo as $todo)
          <div class="card m-2">

          <h2 class="mt-2 text-uppercase"><a href="todos/{{$todo->id}}">{{$todo->title}}</a></h2>
            <span class="badge badge-danger">{{$todo->due}}</span>
          </div>
            @endforeach

@endif
        </div>
        <div class="col-sm-4">
          <h3>This is todo list</h3>
        </div>
@endsection
