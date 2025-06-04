<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>



        {{-- <p>{{ $product->id }} : {{ $product->name }} : {{ $product->description }} : {{ $product->product_id}} : ${{ $product->price }} : ${{ $product->image}} </p> --}}



        <div class="container">

        <div class="card mt-4">
            <div class="card-header bg-secondary text-center text-white">
                 Product Show
            </div>
            <div class="card-body">
                    <p>{{$product['id']}}</p>
                    <p>{{$product['name']}}</p>
                    <p>{{$product['description']}}</p>
                    <p>{{$product['price']}}</p>
                    <p>{{ $product['category']['name'] }}</p>

                   <img src="{{ asset('productImages/'. $product->image) }}" alt="{{$product->image}}" style="width: 50px; height: 50px;"/>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    </div>
</body>
</html>
