@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    
    <div class="col-md-8">
        <div class="card shadow">
            
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Student Portal Registration</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <input name="student_id" class="form-control mb-2" placeholder="Student ID">
                    <input name="first_name" class="form-control mb-2" placeholder="First Name">
                    <input name="last_name" class="form-control mb-2" placeholder="Last Name">
                    <input name="email" class="form-control mb-2" placeholder="Email">
                    <input type="password" name="password" class="form-control mb-2" placeholder="Password">
                    <input name="course" class="form-control mb-2" placeholder="Course">
                    <input name="year_level" class="form-control mb-2" placeholder="Year Level">
                    <input name="contact_number" class="form-control mb-2" placeholder="Contact">
                    <input name="address" class="form-control mb-2" placeholder="Address">
                    <input type="date" name="birthdate" class="form-control mb-3">
                    <div class="text-end">
                        <button class="btn btn-primary">Register</button>
                        <div class="text-center mt-3">
                        <a href="{{ route('login') }}">I have an Account! Login</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection