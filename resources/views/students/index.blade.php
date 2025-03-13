@extends('layouts.app')

@section('content')
<h2>Students</h2>
    @foreach($students as $student)
        <p>{{ $student->name }} - Enrolled in:
            @foreach($student->courses as $course)
                {{ $course->title }},
            @endforeach
        </p>
    @endforeach
@endsection
