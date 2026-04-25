@extends('layouts.app')

@section('content')
<h2>Add Product</h2>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" class="form-control mb-2">
        <textarea name="description" placeholder="Description" class="form-control mb-2"></textarea>
        <input type="text" name="price" placeholder="Price" class="form-control mb-2">
        <button class="btn btn-success">Save</button>
    </form>
@endsection