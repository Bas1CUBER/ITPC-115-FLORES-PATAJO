@extends('layouts.app')
@section('content')
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <h1>Students</h1>
        <a href="{{ route('sections.index') }}" class="btn" style="background:#2980b9; color:#fff;">Go to Sections</a>
    </div>
    <a href="{{ route('students.create') }}" class="btn" style="background:#3498db; color:#fff; margin-bottom:16px; display:inline-block;">Add Student</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Adviser</th>
                <th>Section</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->section->adviser ?? '' }}</td>
                <td>{{ $student->section->name ?? '' }}</td>
                <td style="display:flex; gap:8px;">
                    <a href="{{ route('students.show', $student->id) }}" class="btn" style="background:#3498db; color:#fff;">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn" style="background:#2980b9; color:#fff;">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="background:#34495e; color:#fff;" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
