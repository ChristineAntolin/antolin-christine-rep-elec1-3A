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

        .top {
            text-align: center;
            margin: 20px 0;
        }

        .add-btn {
            display: inline-block;
            padding: 10px 16px;
            background: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .add-btn:hover {
            background: #357ab8;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: white;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info {
            max-width: 65%;
        }

        .actions a,
        .actions button {
            padding: 6px 10px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 13px;
            margin-left: 5px;
        }

        .edit {
            background: #ffc107;
            color: #000;
        }

        .edit:hover {
            background: #e0a800;
        }

        .delete {
            background: #dc3545;
            color: #fff;
        }

        .delete:hover {
            background: #c82333;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Christine Antolin</h2>
    <h1>All Books</h1>

    <div class="top">
        <a class="add-btn" href="{{ route('books.create') }}">+ Add New Book</a>
    </div>

    <ul>
        @foreach ($books as $book)
            <li>
                <div class="info">
                    <strong>{{ $book->title }}</strong><br>
                    <small>by {{ $book->author }} ({{ $book->published_date }})</small>
                </div>

                <div class="actions">
                    <a class="edit" href="{{ route('books.edit', $book->id) }}">Edit</a>

                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="delete" type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>