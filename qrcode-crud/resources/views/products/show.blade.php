@extends('layouts.app')

@section('content')

<style>
    .details-box {
       
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    h2 {
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
    }

    .qr-box {
        text-align: center;
        margin-top: 15px;
    }

    .back-btn {
   
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        margin-top: 20px;
        transition: 0.2s;
    }

    .back-btn:hover {
        transform: translateY(-2px);
    }
</style>

<div class="details-box">

    <h2>Product Details</h2>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> ₱{{ number_format($product->price, 2) }}</p>

    <h5 class="text-center mt-3">QR Code:</h5>

    <div class="qr-box">
        {!! $qr !!}
    </div>

    <div class="text-center">
        <a href="{{ route('products.index') }}" class="btn btn-secondary back-btn">
            Back
        </a>
    </div>
</div>
@endsection