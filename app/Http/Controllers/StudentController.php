<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|string|max:50|unique:students,student_id',

            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',

            'email' => 'required|email|max:255|unique:students,email',

            'mobile_number' => 'required|numeric',

            'date_of_birth' => 'required|date',

            'gender' => 'required|string',

            'program' => 'required|string',

            'year_level' => 'required|string',

            'address' => 'required|string|max:500',

            'profile_picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload profile picture to storage/app/public/student-profiles
        $profilePicturePath = $request
            ->file('profile_picture')
            ->store('student-profiles', 'public');

        // Replace uploaded file object with the saved file path
        $validated['profile_picture'] = $profilePicturePath;

        // Save student information to MySQL
        $student = Student::create($validated);

        return redirect()
            ->route('students.show', $student)
            ->with('success', 'Student registered successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}