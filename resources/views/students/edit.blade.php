
@extends('students.layout')

@section('content')
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}" required>

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}" required>

        <label>Course</label>
        <input type="text" name="course"
               value="{{ old('course', $student->course) }}" required>

        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
@endsection
