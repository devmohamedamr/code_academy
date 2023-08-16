<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hi  {{ $name }}</h1>

    <ul>
        @foreach ($colors as $c)
            <li>{{$c}}</li>
        @endforeach
    </ul>

    <ul>
        @foreach ($usernames as $user)
            <li>{{$user}}</li>
        @endforeach
    </ul>
</body>
</html>
