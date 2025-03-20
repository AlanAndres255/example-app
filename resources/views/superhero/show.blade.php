<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperHero Details</title>
</head>
<body>
    <h1>{{ $superheroes->name }}</h1>
    <p>Real Name: {{ $superheroes->real_name }}</p>
    <p>Gender: {{ $superheroes->gender->name  }}</p>
    <p>Universe: {{ $superheroes->universe->name  }}</p>
    <a href="{{ $superheroes->picture }}">{{ $superheroes->picture }}"</a>
    <br><br>
    <button><a href="{{route('superhero.index')}}">Back</a></button>
</body>
</html>