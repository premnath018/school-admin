<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view('view-class', compact('classes'));
    }

    public function create()
    {
        return view('add-class');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:classes',
        ]);

        Classes::create($request->all());

        return redirect()->route('classes.index')->with('success', 'Class added successfully!');
    }

    public function edit(Classes $class)
    {
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, Classes $class)
    {
        $request->validate([
            'name' => 'required|unique:classes,name,' . $class->id,
        ]);

        $class->update($request->all());

        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    public function destroy(Classes $class)
    {
        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Class deleted successfully!');
    }
}
