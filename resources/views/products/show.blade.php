@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="card mt-4">
            <div class="card-header bg-secondary text-center text-white">
                Product Show
            </div>
            <div class="card-body">
                <p>{{ $product['id'] }}</p>
                <p>{{ $product['name'] }}</p>
                <p>{{ $product['description'] }}</p>
                <p>{{ $product['price'] }}</p>
                <p>{{ $product['category']['name'] }}</p>

                <img src="{{ asset('productImages/' . $product->image) }}" alt="{{ $product->image }}"
                    style="width: 50px; height: 50px;" />

                @if ($product->status == 1)
                    <p class="text-success">Active</p>
                @else
                    <p class="text-danger">Suspend</p>
                @endif

            </div>
            <div class="card-footer">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>

    </div>
@endsection
