@extends('layouts.app')
@section('content')
    <h1>Student Details</h1>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Contact Number: {{ $student->contact_number }}</p>
    <p>Adviser: {{ $student->section->adviser ?? '' }}</p>
    <p>Section: {{ $student->section->name ?? '' }}</p>
    <a href="{{ route('students.index') }}" class="btn" style="background:#6c757d; color:#fff; margin-top:16px;">Back to List</a>
@endsection
