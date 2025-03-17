@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Students</h2>

        <table class="table table-bordered">
            <thead class="thead-dark">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Enrolled Courses</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)

                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>
                            @foreach ($student->courses as $course)
                                {{ $course->title }}@if (!$loop->last)
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary"  href="{{ route('students.create') }}">Create New</a>
    </div>
@endsection
