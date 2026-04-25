@extends('layouts.app')

@section('content')
<h2>Edit Product</h2>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2">
        <textarea name="description" class="form-control mb-2">{{ $product->description }}</textarea>
        <input type="text" name="price" value="{{ $product->price }}" class="form-control mb-2">
        <button class="btn btn-primary">Update</button>
    </form>
@endsection