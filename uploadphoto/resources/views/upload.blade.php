<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Upload</title>

    <style>

        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 5px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .subtitle {
            text-align: center;
            color: #888;
            margin-bottom: 25px;
        }

        .form-box {
            background: #f9f9ff;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 1px solid #eee;
            transition: 0.3s;
        }

        input[type="file"] {
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 16px;
            border: none;
            background: linear-gradient(135deg, #4facfe, #5bbbc0);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .success {
            text-align: center;
            color: #1e7e34;
            background: #d4edda;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 15px;
        }

        .card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .delete-form {
            position: absolute;
            bottom: 8px;
            right: 8px;
        }

        .delete-form button {
            background: rgba(255, 0, 0, 0.85);
            font-size: 12px;
            padding: 6px 10px;
            border-radius: 6px;
        }

        .delete-form button:hover {
            background: red;
        }

        .header-box {
            text-align: center;
            margin-bottom: 20px;
        }

        .header-box h2 {
            color: #333;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header-box">
        <h2>Christine Antolin</h2>
        <div class="subtitle">Laravel Image Upload System</div>
    </div>

    <div class="form-box">
        <h3>Single Image Upload</h3>
        <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" required>
            <button type="submit">Upload</button>
        </form>
    </div>

    <div class="form-box">
        <h3>Multiple Images Upload</h3>
        <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="images[]" multiple required>
            <button type="submit">Upload</button>
        </form>
    </div>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <h2>Uploaded Photos</h2>

    <div class="gallery">
        @foreach ($photos as $photo)
            <div class="card">
                <img src="{{ asset('images/' . $photo->image) }}">

                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete this image?')">
                        Delete
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
