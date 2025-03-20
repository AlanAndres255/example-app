<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Universe</title>
</head>
<body>
    <h1>Edit Universe</h1>
    <form action="{{ route('universes.update', $universes->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universes->name }}">
        <br><br>
        <input type="submit" value="Update">
    </form>
    <br><br>
    <button><a href="{{route('universes.index')}}">Back</a></button>
</body>
</html>