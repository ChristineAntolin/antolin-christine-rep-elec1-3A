@extends('layouts.app')

@section('content')

<h3>Add Student</h3>
    <form method="POST" enctype="multipart/form-data" action="{{ route('students.store') }}">
        @csrf
        <input class="form-control mb-2" name="name" placeholder="Name">
        <input class="form-control mb-2" name="email" placeholder="Email">
        <input class="form-control mb-2" name="course" placeholder="Course">
        <input class="form-control mb-2" name="year" placeholder="Year">
        <input class="form-control mb-2" name="section" placeholder="Section">
        <input type="file" class="form-control mb-3" name="photo">
        <button class="btn btn-success">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection