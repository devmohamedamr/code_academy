<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
    @endif
    <form action="{{ url('loginrequest') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="conpassword" placeholder="conpassword">
        <input type="submit" value="login">
    </form>
</body>
</html>
