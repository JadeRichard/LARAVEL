<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Le fruit : {{ $fruit }}</p>

    <a href="{{ url('/about') }}">about</a>
    <a href="{{ url('../contact') }}">contact</a>
</body>
</html>