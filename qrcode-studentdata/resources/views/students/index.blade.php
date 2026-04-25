@extends('layouts.app')
@section('content')
<style>
    body {
        background: linear-gradient(135deg, #fcb4d8, #d390e4);
        min-height: 100vh;
    }
    .page-title {
        font-weight: 700;
        color: #333;
    }
    .card-box {
        background: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .table-hover tbody tr:hover {
        background-color: #eaf4ff;
        transition: 0.2s;
    }
    .btn-add {
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 13px;
    }
    img {
        border-radius: 10px;
        object-fit: cover;
    }
    .container {
        padding-top: 30px;
        padding-bottom: 30px;
    }
</style>

<div class="container">
    <h2 class="mb-3 page-title">Students Data</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card-box">
        <form method="GET" class="mb-3 d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Search student...">
            <button class="btn btn-primary btn-sm">Search</button>
        </form>

        <div class="mb-3">
            <a href="{{ route('students.create') }}" class="btn btn-success btn-sm btn-add">
                + Add Student
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>QR Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'.$student->photo) }}" width="70" height="70">
                        </td>

                        <td><strong>{{ $student->name }}</strong></td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }} - {{ $student->year }} {{ $student->section }}</td>

                        <td>
                            {!! QrCode::size(80)->generate(json_encode([
                                'name'=>$student->name,
                                'email'=>$student->email,
                                'course'=>$student->course,
                                'year'=>$student->year,
                                'section'=>$student->section
                            ])) !!}
                        </td>

                        <td>
                            <a href="{{ route('students.edit',$student->id) }}" class="btn btn-warning btn-sm mb-1">
                                Edit
                            </a>

                            <form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection