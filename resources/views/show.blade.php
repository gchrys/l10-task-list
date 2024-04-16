@extends('layouts.app')

@section('title', $task->title)

@section('content')
  <nav class="mb-4">
        <a class="font-medium text-gray-700 border-b-2 border-blue-500 hover:border-blue-900" href="{{ route('tasks.index') }}"><- Back</a>
    </nav>
  <p class="mb-4 text-slate-700">{{ $task->description }}</p>

  @if ($task->long_description)
    <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
  @endif

  <p class="text-sm mb-4 text-slate-500">Created: {{ $task->created_at->diffForHumans() }} | Updated: {{ $task->updated_at->diffForHumans() }}</p>

  <p class="mb-4">@if($task->completed) 
    <span class="text-medium text-green-700">Completed</span> 
    @else
    <span class="text-gray-500">Not completed</span>
    @endif
  </p>
<div class="flex gap-2">
  <a class="btn ring-gray-700 text-gray-700 hover:bg-slate-50" href="{{ route('tasks.edit', ['task'=>$task->id]) }}">Edit Task</a>

<form action="{{ route('tasks.toggle',['task'=>$task->id]) }}" method="POST">
      @csrf
      @method("PUT")
      <button 
      @class(['btn','ring-green-700 text-green-700 hover:bg-green-700 hover:text-white' => !$task->completed,'ring-orange-700 text-orange-700 hover:bg-orange-700 hover:text-white'=>$task->completed])
        type="submit">Mark as {{ $task->completed ? "not completed" : "completed" }}</button>
  </form>

    <form action="{{ route('tasks.destroy',['task'=>$task->id]) }}" method="POST">
      @csrf
      @method("DELETE")
      <button class="btn ring-rose-700 text-white bg-rose-700" type="submit">Delete</button>
  </form>
  </div>
@endsection