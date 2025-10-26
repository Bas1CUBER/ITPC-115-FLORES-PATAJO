<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = \App\Models\Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = \App\Models\Section::all();
        return view('students.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:students,name',
            'email' => 'required|email|unique:students,email',
            'contact_number' => 'required',
            'section_id' => 'required|exists:sections,id',
        ]);
        \App\Models\Student::create($validated);
        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = \App\Models\Student::with('section')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = \App\Models\Student::findOrFail($id);
        $sections = \App\Models\Section::all();
        return view('students.edit', compact('student', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = \App\Models\Student::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|unique:students,name,' . $id,
            'email' => 'required|email|unique:students,email,' . $id,
            'contact_number' => 'required',
            'section_id' => 'required|exists:sections,id',
        ]);
        $student->update($validated);
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = \App\Models\Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
