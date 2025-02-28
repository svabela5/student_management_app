<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create(){
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('Select College', '');
        $student = new Student();
        return view('students.create', compact('colleges', 'student'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students',
            'phone' => 'required|unique:students|regex:/^\+?\d*$/',
            'dob' => 'required',
            'college_id' => 'required|exists:colleges,id'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('message', 'Student has been added successfully');
    }

    public function edit($id){
        $student = Student::find($id);
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('Select College', '');
        
        return view('students.edit', compact('colleges', 'student'));
    }

    public function update($id, Request $request){
        $student = Student::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',//|unique:students',
            'phone' => 'required|regex:/^\+?\d*$/',
            'dob' => 'required',
            'college_id' => 'required|exists:colleges,id'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('message', 'Student has been added successfully');
    }
}
