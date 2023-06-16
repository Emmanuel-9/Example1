<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Create a variable for students
        $students = Student::latest()->paginate(5);

        return view('students.index', compact('students'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the input 
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'idNumber' => 'required'

        ]);
        // Create new Student details
        Student::create($request->all());

        // Redirect the user and send friendly messages
        return redirect()->route('students.index')->with('success', 'Details added successfully');
    }

    /**
     * Display the specified resource.
     * 
     * @param \App\Models\Student
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\Student
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request
     * @param \App\Models\Student
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, Student $student)
    {
        //Validate the input 
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'idNumber' => 'required'

        ]);
        // Update Student details
        $student->update($request->all());

        // Redirect the user and send friendly messages
        return redirect()->route('students.index')->with('success', 'Details updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     * 
     * 
     * @param \App\Models\Student
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function destroy(Student $student)
    {
        //Delete Student details
        $student->delete();

        // Confirmation Message and Redirection 
        return redirect()->route('students.index')->with('success', 'Details deleted successfully'); 

    }
}
