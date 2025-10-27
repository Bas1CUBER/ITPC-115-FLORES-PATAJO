@extends('layouts.app')
@section('content')
    <h1>Add Section</h1>
    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
    <label>Name of Adviser:</label>
    <input type="text" name="adviser" required><br>
    <label>Section:</label>
    <input type="text" name="name" maxlength="1" size="1" pattern="[A-Za-z]{1}" title="Please enter only one letter" required oninput="this.value = this.value.slice(0,1)"><br>
        <div style="display:flex; gap:8px; margin-top:16px;">
            <button type="submit">Save</button>
            <a href="{{ route('sections.index') }}" class="btn" style="background:#6c757d; color:#fff;">Back</a>
        </div>
    </form>
@endsection
