<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Product Edit</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">

    @csrf

    <input type="text" name="name" value="{{$product->name}}">

    <button type="submit">
        Update
    </button>
    </form>
</body>
</html>