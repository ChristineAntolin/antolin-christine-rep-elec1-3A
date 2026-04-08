
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-20">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <h3>Welcome, {{ $user->first_name }}!</h3>
                <p>Email: {{ $user->email }}</p>
                <p>Member since: {{ \Carbon\Carbon::parse($user->created_at)->format('M d, Y') }}</p>
            </div>
        </div>
    </div>
</div>@endsection

