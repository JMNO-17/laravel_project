<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div>
        <h1>Product List</h1>

        @foreach ($products as $product)
            <p>{{ $product->id }} : {{ $product->name }} : {{ $product->description }} : ${{ $product->price }}</p>
            <a href="{{ route('products.show', ['id' => $product->id]) }}">Show</a>
        @endforeach

    </div>
</body>
</html>
