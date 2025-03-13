@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold">Courses List</h2>
@foreach($courses as $course)
    <p class="mt-2">{{ $course->title }} - Enrolled Students:
        @foreach($course->students as $student)
            <span class="text-green-500">{{ $student->name }}</span>,
        @endforeach
    </p>
@endforeach
@endsection
