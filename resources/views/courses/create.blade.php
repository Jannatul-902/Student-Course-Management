@extends('layouts.app')

@section('content')
    <h1>Add New Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Course Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <button type="submit">Add Course</button>
        </div>
    </form>
@endsection
