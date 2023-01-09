<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach($allProduct as $all)
    <h1>{{ $all->name }}</h1>
    <h2>{{ $all->price }}</h1>
        <a href="{{ url('product',$all->id) }}"><button>View details</button></a>

        @endforeach
</body>

</html>