<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="mt-4">Product List</h1>

        <a href="{{ route('products.create') }}" class="btn btn-outline-success mb-4">Create</a>
         <a href="{{route('categories.index')}}" class="btn btn-outline-warning mb-4">Category List</a>

        <!-- @foreach ($products as $product)
            <p>{{ $product->id }} : {{ $product->name }} : {{ $product->description }} : ${{ $product->price }}</p>
            <a href="{{ route('products.show', ['id' => $product->id]) }}">Show</a>
            <a href="{{ route('products.edit', ['id' => $product->id]) }}">Edit</a>

             <form action="{{ route('products.delete', $product->id) }}" method="POST">
                @csrf
                 <button>Delete</button>
            </form>

        @endforeach -->

        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th class="bg-secondary text-white">ID</th>
                    <th class="bg-secondary text-white">NAME</th>
                    <th class="bg-secondary text-white">Description</th>
                    <th class="bg-secondary text-white">Image</th>
                    <th class="bg-secondary text-white">Price</th>
                    <th class="bg-secondary text-white">CATEGORY</th>
                    <th class="bg-secondary text-white">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['description']}}</td>
                        <td><img src="{{asset('productImages/'.$product['image'])}}" alt="{{$product->image}}" style="width: 50px; height: 50px; border-radius: 50%;"></td>
                        {{-- <td><img src="{{asset("categoryImages/")}}" alt=""></td> --}}
                        <td>{{$product['price']}}</td>
                        <td>{{ $product['category']['name'] }}</td>
                        <td class="d-flex">
                            <a href="{{route('products.show', ['id' => $product->id])}}" class="btn btn-outline-primary me-2">Show</a>
                            <a href="{{route('products.edit', ['id' => $product->id])}}" class="btn btn-outline-warning me-2">Edit</a>

                            <form action="{{ route('products.delete', $product->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
