@extends('layouts.app')

@section('content')

<h3>Update Profile</h3>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('user.settings.update') }}">
       @csrf
            <input name="first_name" value="{{ $user->first_name ?? '' }}" class="form-control mb-2" placeholder="First Name">
            <input name="last_name" value="{{ $user->last_name ?? '' }}" class="form-control mb-2" placeholder="Last Name">
            <input name="email" value="{{ $user->email ?? '' }}" class="form-control mb-2" placeholder="Email">

            <div class="d-flex gap-2">
                <button class="btn btn-primary">Update Profile</button>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
            </div>
    </form>
@endsection