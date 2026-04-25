@extends('layouts.app')

@section('content')

<h3>Edit Student</h3>
    <form method="POST" enctype="multipart/form-data" action="{{ route('students.update',$student->id) }}">
        @csrf
        @method('PUT')
        <input class="form-control mb-2" name="name" value="{{ $student->name }}">
        <input class="form-control mb-2" name="email" value="{{ $student->email }}">
        <input class="form-control mb-2" name="course" value="{{ $student->course }}">
        <input class="form-control mb-2" name="year" value="{{ $student->year }}">
        <input class="form-control mb-2" name="section" value="{{ $student->section }}">
        <input type="file" class="form-control mb-3" name="photo">
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>

@endsection