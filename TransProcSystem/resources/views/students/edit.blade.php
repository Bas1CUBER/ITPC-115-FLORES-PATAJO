@extends('layouts.app')
@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $student->email }}" required><br>
    <label>Contact Number:</label>
    <input type="text" name="contact_number" value="{{ $student->contact_number }}" required><br>
        <label>Section:</label>
        <select name="section_id" required>
            @foreach($sections as $section)
                <option value="{{ $section->id }}" @if($student->section_id == $section->id) selected @endif>{{ $section->name }}</option>
            @endforeach
        </select><br>
        <div style="display:flex; gap:8px; margin-top:16px;">
            <button type="submit">Update</button>
            <a href="{{ route('students.index') }}" class="btn" style="background:#6c757d; color:#fff;">Back</a>
        </div>
    </form>
@endsection
