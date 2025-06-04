<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- <div>
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
    </div> -->

    <div class="container">
        {{-- {{ dd($errors) }} --}}
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
            <div class="card-header bg-secondary text-white">
                + Product Create
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" name="name" placeholder="Enter Product Name"
                        class="form-control mb-2">
                    <label for="description" class="form-label">Description :</label>
                    <input type="text" name="description" placeholder="Enter Product Description"
                        class="form-control mb-2">
                    <label for="price" class="form-label">Price :</label>
                    <input type="text" name="price" placeholder="Enter Product Price"
                        class="form-control mb-2">
                    <input type="file" class="form-control mb-2" name="image" />
                    <label for="category" class="form-label mb-2">Category :</label>
                    <select name="category_id" id="category_id" class="mb-2">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <div class="form-check form-switch mb-3">
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" id="status" name="status" value="1">
                        <label class="form-check-label" for="status">Active</label>
                    </div>


                </div>



                <div class="card-footer">
                    <button class="btn btn-primary me-2" type="submit">
                        Create
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
