<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    $students = Student::all(); 
    $classes = Classes::pluck('name', 'id'); 

    return view('view-students', compact('students','classes'));
}

    public function add()
    {
        $classes = Classes::pluck('name', 'id'); 

        return view('add-students', compact('classes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'class' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'community' => 'required',
            'mother_tongue' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'parent_number' => 'required',
        ]);
        $formattedDateOfBirth = date('Y-m-d', strtotime($request->input('date_of_birth')));
        $request->merge(['date_of_birth' => $formattedDateOfBirth]);
        try {
            Student::create($request->all());
    
            return redirect()->route('students.index')->with('success', 'Student created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Error creating student: ' . $e->getMessage());
        }
    }

    public function deleteStudent($id)
    {
        try {
            $Student = Student::findOrFail($id);
            $Student->delete();
    
            return redirect()->route('students.index')->with('success', 'Student deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting Student: ' . $e->getMessage());
        }
    }

}
