<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = \App\Models\Section::with('students')->get();
        return view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'adviser' => 'nullable',
        ]);
        \App\Models\Section::create($validated);
        return redirect()->route('sections.index')->with('success', 'Section created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $section = \App\Models\Section::with('students')->findOrFail($id);
        return view('sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $section = \App\Models\Section::findOrFail($id);
        return view('sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section = \App\Models\Section::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'adviser' => 'nullable',
        ]);
        $section->update($validated);
        return redirect()->route('sections.index')->with('success', 'Section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $section = \App\Models\Section::findOrFail($id);
        $section->delete();
        return redirect()->route('sections.index')->with('success', 'Section deleted successfully');
    }
}
