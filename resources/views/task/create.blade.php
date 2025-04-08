@extends('layouts.app')

@section('content')
    <h2>Create Task</h2>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        @include('task.form')
    </form>
@endsection

