<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e97fc5, #cc9fe6);
        }

        .container {
            width: 100%;
            max-width: 520px;
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            text-align: center;
            margin-bottom: 5px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            font-weight: normal;
            color: #777;
            font-size: 16px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 14px;
        }

        input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 8px rgba(108,99,255,0.3);
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background: linear-gradient(135deg, #cc5edb, #8e44ad);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(108,99,255,0.3);
        }

        .title {
            text-align: center;
            margin-bottom: 10px;
            color: #222;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Christine Antolin</h2>
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Enter book title" required>

        <label for="author">Author</label>
        <input type="text" id="author" name="author" placeholder="Enter author name" required>

        <label for="published_date">Published Date</label>
        <input type="date" id="published_date" name="published_date" required>

        <button type="submit">Save Book</button>
    </form>
</div>

</body>
</html>