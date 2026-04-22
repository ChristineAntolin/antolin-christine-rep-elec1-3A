<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>

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
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            border-color: #cc5edb;
            box-shadow: 0 0 8px rgba(204,94,219,0.3);
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
            box-shadow: 0 10px 20px rgba(204,94,219,0.3);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .back-link:hover {
            color: #000;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Christine Antolin</h2>
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" id="title" name="title"
               value="{{ $book->title }}" placeholder="Enter book title" required>

        <label for="author">Author</label>
        <input type="text" id="author" name="author"
               value="{{ $book->author }}" placeholder="Enter author name" required>

        <label for="published_date">Published Date</label>
        <input type="date" id="published_date" name="published_date"
               value="{{ $book->published_date }}" required>

        <button type="submit">Update Book</button>
    </form>
</div>

</body>
</html>