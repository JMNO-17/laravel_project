<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>Product Edit</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">

    @csrf

    <input type="text" name="name" value="{{$product->name}}">

    <button type="submit">
        Update
    </button>
    </form> -->


    <div class="container">
        <div class="mt-4 text-danger">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="card mt-4">
            <div class="card-header">
                Product Edit 
            </div>
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
                    <input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary me-2" type="submit">
                        Update
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>