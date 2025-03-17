@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Courses List</h2>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Enrolled Students</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>
                        @if($course->students->count() > 0)
                            @foreach($course->students as $student)
                                <span class="text-success">{{ $student->name }}</span>@if(!$loop->last), @endif
                            @endforeach
                        @else
                            <span class="text-danger">No students enrolled</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary"  href="{{ route('courses.create') }}">Create New</a>
@endsection
