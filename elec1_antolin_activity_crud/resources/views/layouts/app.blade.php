<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-warning mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-4">
            <span class="navbar-brand mb-0 h1 text-light">Student Portal</span>
            @if(Session::has('user_name'))
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('user.settings') }}">Account Settings</a>
                    </li>
                </ul>
            @endif
        </div>

        @if(Session::has('user_name'))
            <div class="d-flex align-items-center gap-3">
                <span class="text-light">
                    {{ Session::get('user_name') }}
                </span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                </form>
            </div>
        @endif 

    </div>
</nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>