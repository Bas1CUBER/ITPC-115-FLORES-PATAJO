@extends('layouts.app')
@section('content')
    <h1>Adviser: {{ $section->adviser }} - {{ $section->name }}</h1>
    <h2>Students in this Section</h2>
    <ul>
        @foreach($section->students as $student)
            <li>{{ $student->name }} ({{ $student->email }})</li>
        @endforeach
    </ul>
    <a href="{{ route('sections.index') }}" class="btn" style="background:#6c757d; color:#fff; margin-top:16px;">Back to List</a>
@endsection
