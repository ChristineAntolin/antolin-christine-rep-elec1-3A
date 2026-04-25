@extends('layouts.app')

@section('content')

<style>
    h2 {
        font-weight: 700;
        margin-bottom: 20px;
    }
    .add-btn {
        display: inline-block;
        padding: 9px 16px;
        color: #fff;
        font-size: 14px;
        border-radius: 10px;
        text-decoration: none;
        background: linear-gradient(135deg, #28a745, #20c997);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        transition: 0.2s;
        margin-bottom: 15px;
    }

    .add-btn:hover {
        transform: translateY(-2px);
        color: #fff;
    }

    table {
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
    }

    .table th {
        background: #343a40;
        color: #fff;
    }

    .table td, .table th {
        vertical-align: middle;
    }

    .btn-sm {
        border-radius: 8px;
        padding: 10px 20px;
        font-size: 14px;
    }

    .qr-cell svg {
        display: block;
        margin: auto;
    }
</style>

<div class="page-wrapper">
    <h2>Products</h2>

    <a href="{{ route('products.create') }}" class="add-btn">
        + Add Product
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover text-center align-middle shadow-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>QR Code</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($products as $product)
            <tr>
                <td><strong>{{ $product->name }}</strong></td>
                <td>₱{{ number_format($product->price, 2) }}</td>

                <td class="qr-cell">
                    {!! $product->qr !!}
                </td>

                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                        View
                    </a>

                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection