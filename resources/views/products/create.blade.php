<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Product Create</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Product Name" />
            <input type="text" name="description" placeholder="Enter Description" />
            <input type="text" name="price" placeholder="Enter Price" />
            <button type="submit">
                create
            </button>
        </form>
    </div>
</body>
</html>