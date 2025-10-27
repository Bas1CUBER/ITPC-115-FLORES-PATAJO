@extends('layouts.app')
@section('content')
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <h1>Sections</h1>
        <a href="{{ route('students.index') }}" class="btn" style="background:#2980b9; color:#fff;">Go to Students</a>
    </div>
    <a href="{{ route('sections.create') }}" class="btn" style="background:#3498db; color:#fff; margin-bottom:16px; display:inline-block;">Add Section</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name of Adviser</th>
                <th>Section</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sections as $section)
            <tr>
                <td>{{ $section->adviser }}</td>
                <td>{{ $section->name }}</td>
                <td style="display:flex; gap:8px;">
                    <a href="{{ route('sections.show', $section->id) }}" class="btn" style="background:#3498db; color:#fff;">View</a>
                    <a href="{{ route('sections.edit', $section->id) }}" class="btn" style="background:#2980b9; color:#fff;">Edit</a>
                    <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="background:#34495e; color:#fff;" onclick="return confirm('Are you sure you want to delete this section?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
