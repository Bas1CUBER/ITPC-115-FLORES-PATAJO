@extends('layouts.app')
@section('content')
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>Contact Number:</label>
    <input type="text" name="contact_number" required><br>
        <label>Section:</label>
        <select name="section_id" required>
            @foreach($sections as $section)
                <option value="{{ $section->id }}">{{ $section->name }}</option>
            @endforeach
        </select><br>
        <div style="display:flex; gap:8px; margin-top:16px;">
            <button type="submit">Save</button>
            <a href="{{ route('students.index') }}" class="btn" style="background:#6c757d; color:#fff;">Back</a>
        </div>
    </form>
@endsection
