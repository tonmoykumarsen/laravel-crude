@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>
    <form action="{{ route('task.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        @include('task.form')
    </form>
@endsection
