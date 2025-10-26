@extends('layouts.app')
@section('content')
    <h1>Edit Section</h1>
    <form action="{{ route('sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')
    <label>Name of Adviser:</label>
    <input type="text" name="adviser" value="{{ $section->adviser }}" required><br>
    <label>Section:</label>
    <input type="text" name="name" value="{{ $section->name }}" maxlength="1" size="1" pattern="[A-Za-z]{1}" title="Please enter only one letter" required oninput="this.value = this.value.slice(0,1)"><br>
        <div style="display:flex; gap:8px; margin-top:16px;">
            <button type="submit">Update</button>
            <a href="{{ route('sections.index') }}" class="btn" style="background:#6c757d; color:#fff;">Back</a>
        </div>
    </form>
@endsection
