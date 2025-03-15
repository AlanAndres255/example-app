<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Universe</title>
</head>
<body>
    <h1> Create Universe</h1>
    <form action="{{route ('universes.store')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">

        <button type="submit">Create Universe</button>
    </form>
</body>
</html>