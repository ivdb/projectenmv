views/tasks/index.blade.php

@extends('layouts.app')

@section('content')
    <h2>Projects</h2>

    @if ( !$tasks->count() )
        You have no projects
    @else
        <ul>
            @foreach( $tasks as $task )
                <li><a href="{{ route('tasks.show', $task->slug) }}">{{ $task->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection