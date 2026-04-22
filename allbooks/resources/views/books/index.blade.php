<!DOCTYPE html>
<html>
<head>
    <title>All Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e97fc5, #cc9fe6);
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        h1, h2 {
            text-align: center;
        }

        h2 {
            color: #555;
            font-weight: normal;
        }

        .top-bar {
            text-align: center;
            margin: 20px 0;
        }

        .btn-add {
            display: inline-block;
            padding: 10px 16px;
            background: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: #357ab8;
        }

        .book-list {
            list-style: none;
            padding: 0;
        }

        .book-item {
            background: #fff;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .book-info {
            max-width: 60%;
        }

        .actions a, .actions button {
            margin-left: 8px;
            padding: 6px 10px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 13px;
        }

        .edit-btn {
            background: #ffc107;
            color: #000;
        }

        .edit-btn:hover {
            background: #e0a800;
        }

        .delete-btn {
            background: #dc3545;
            color: #fff;
        }

        .delete-btn:hover {
            background: #c82333;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Christine Antolin</h2>
    <h1>All Books</h1>

    <div class="top-bar">
        <a class="btn-add" href="{{ route('books.create') }}">+ Add New Book</a>
    </div>

    <ul class="book-list">
        @foreach ($books as $book)
            <li class="book-item">
                <div class="book-info">
                    <strong>{{ $book->title }}</strong><br>
                    <small>by {{ $book->author }} | {{ $book->published_date }}</small>
                </div>

                <div class="actions">
                    <a class="edit-btn" href="{{ route('books.edit', $book->id) }}">Edit</a>

                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn" type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>