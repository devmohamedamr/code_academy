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
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>delete</th>
        </tr>
        @foreach ($data as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
                <form action="category/{{$category->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>
            </td>
            {{-- <td><a href="{{url("category/$category->id")}}">delete</a></td> --}}
        </tr>
        @endforeach
    </table>
</body>
</html>
