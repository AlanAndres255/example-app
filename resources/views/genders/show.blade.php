<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Details</title>
</head>
<body>
    <h1>{{ $gender->name }}</h1>
    <p>{{ $gender -> id}}</p>
    <br><br>
    <button><a href="{{route('genders.index')}}">Back</a></button>
</body>
</html>