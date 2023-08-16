<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>users</h2>
    <ul>
        @foreach ($res as $user)
            <li>{{$user->email}} | {{$user->name}}</li>
        @endforeach
    </ul>
</body>
</html>
