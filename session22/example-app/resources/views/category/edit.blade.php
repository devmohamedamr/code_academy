<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
    <form action="{{url("category/$category->id")}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$category->name}}">
        <input type="submit" value="save">
    </form>
</body>
</html>
