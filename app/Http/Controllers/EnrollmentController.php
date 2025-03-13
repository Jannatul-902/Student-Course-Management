<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function enroll(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::findOrFail($request->student_id);
        $course = Course::find($request->course_id);

        if (!$student->courses()->where('course_id', $request->course_id)->exists()) {
            return back()->with('error', 'This student is already enrolled in this course.');
        }

        $student->courses()->attach($request->course_id, ['enrolled_at' => now()]);
        return back()->with('success', 'Student enrolled successfully.');
    }
}
