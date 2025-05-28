<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>

    {{-- @php
        $categories = [

            [
                'id' => 1,
                'name' => 'Inforamtion Technology',
            ],

            [
                'id' => 2,
                'name' => 'Travel',
            ],

            [
                'id' => 3,
                'name' => 'Food',
            ],

            [
                'id' => 4,
                'name' => 'Health & fitness',
            ],

            [
                'id' => 5,
                'name' => 'Education',
            ],

];
    @endphp --}}

    <div>
        <h1>Category List</h1>
        @foreach ($categories as $data)
            <p>{{ $data['id']}} : {{$data['name']}}</p>
            <a href="{{route('categories.show', ['id' => $data->id])}}">Show</a>
        @endforeach
    </div>
</body>
</html>
