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
@endsection