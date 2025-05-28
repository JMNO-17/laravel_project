<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Show</title>
</head>
<body>
    <div>
        <h1>Products Show</h1>

        <p>{{ $product->id }} : {{ $product->name }} : {{ $product->description }} : ${{ $product->price }}</p>

    </div>
</body>
</html>
