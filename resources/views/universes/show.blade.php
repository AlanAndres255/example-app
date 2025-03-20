<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Details</title>
</head>
<body>
    <h1>{{ $universes->name }}</h1>
    <p>{{ $universes->id }}</p>
    <br><br>
    <button><a href="{{route('universes.index')}}">Back</a></button>
</body>
</html>