<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Create a variable for students
        $students = Student::latest()->paginate(5);

        return view('students.index', compact('students'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate the input 
        $request->validate([
            'First Name' => 'required',
            'Last Name' => 'required',
            'Email Address' => 'required',
            'Country' => 'required',
            'Gender' => 'required',
            'ID Number' => 'required'

        ]);
        // Create new Student details
        Student::create($request->all());

        // Redirect the user and send friendly messages
        return redirect()->route('student.index')->with('success', 'Details added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //Validate the input 
        $request->validate([
            'First Name' => 'required',
            'Last Name' => 'required',
            'Email Address' => 'required',
            'Country' => 'required',
            'Gender' => 'required',
            'ID Number' => 'required'

        ]);
        // Update Student details
        $student->update($request->all());

        // Redirect the user and send friendly messages
        return redirect()->route('students.index')->with('success', 'Details updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //Delete Student details
        $student->delete();

        // Confirmation Message and Redirection 
        return redirect()->route('students.index')->with('success', 'Details deleted successfully'); 

    }
}
