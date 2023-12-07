<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all(); 
        $classes = Classes::pluck('name', 'id'); 
        return view('view-teachers', compact('teachers','classes'));    }

    public function add()
    {
        $classes = Classes::pluck('name', 'id'); 

        return view('add-teacher', compact('classes'));
    }

    public function addTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'subject_taught' => 'required',
            'class_assigned_id' => 'required|exists:classes,id',
        ]);
        $formattedDateOfBirth = date('Y-m-d', strtotime($request->input('date_of_birth')));
        $request->merge(['date_of_birth' => $formattedDateOfBirth]);
        
        Teacher::create($request->all());

        try {
            Teacher::create($request->all());
    
            return redirect()->route('teacher.index')->with('success', 'Teacher created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Error creating Teacher: ' . $e->getMessage());
        }
    }   
    
    public function deleteTeacher($id)
{
    try {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teacher.index')->with('success', 'Teacher deleted successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error deleting Teacher: ' . $e->getMessage());
    }
}
    
}
