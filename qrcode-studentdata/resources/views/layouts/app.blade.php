<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #fa92f1, #f1a1cd);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-box {
            width: 100%;
            max-width: 1100px;
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
        }
    </style>

</head>
<body>
    <div class="card card-box">
        <h5>Christine Antolin</h5>
        @yield('content')
        
    </div>

</body>
</html>