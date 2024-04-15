@extends('layouts.app')

@section('title', $task->title)

@section('styles')
<style>
    .success-message{
        color: green;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')
  <p>{{ $task->description }}</p>

  @if ($task->long_description)
    <p>{{ $task->long_description }}</p>
  @endif

  <p>{{ $task->created_at }}</p>
  <p>{{ $task->updated_at }}</p>

  <p>@if($task->completed) 
    Completed 
    @else
    Not completed
    @endif
  </p>
<div>
  <a href="{{ route('tasks.edit', ['task'=>$task->id]) }}">Edit Task</a>
</div>

<div>
<form action="{{ route('tasks.toggle',['task'=>$task->id]) }}" method="POST">
      @csrf
      @method("PUT")
      <button type="submit">Mark as {{ $task->completed ? "not completed" : "completed" }}</button>
  </form>
</div>

  <div>
    <form action="{{ route('tasks.destroy',['task'=>$task->id]) }}" method="POST">
      @csrf
      @method("DELETE")
      <button type="submit">Delete</button>
  </form>
  </div>
@endsection