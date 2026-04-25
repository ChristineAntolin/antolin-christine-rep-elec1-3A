<!DOCTYPE html>
<html>
<head>
    <title>QR Code CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #74ebd5, #9face6);
        }
        .main-wrapper {
            padding: 40px 15px;
            max-width: 1200px;
            margin: auto;
            position: relative;
            z-index: 1;
        }
        .card-box {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.3);
        }
        h5 {
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        table {
            border-radius: 10px;
            overflow: hidden;
        }
    </style>

</head>

<body>

    <div class="container main-wrapper">
        <h5>Christine Antolin</h5>
        <div class="card card-box">
            @yield('content')
        </div>
    </div>

</body>
</html>