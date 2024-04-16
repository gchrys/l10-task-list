@extends('layouts.app')


@section('title', 'The list of tasks')

@section('content')
    <nav class="mb-4">
        <a class="font-medium text-gray-700 border-b-2 border-blue-500 hover:border-blue-900" href="{{ route('tasks.create') }}">Add Task</a>
    </nav>
    @forelse ($tasks as $task)
        <div>
            <a 
            @class(['font-medium','line-through'=>$task->completed]) href="{{ route('tasks.show',['task'=>$task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection