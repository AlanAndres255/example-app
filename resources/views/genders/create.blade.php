<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Gender</title>
</head>
<body>
    <h1>Create Gender</h1>
    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" required>
        <br>
        <button type="submit">Create Genders</button>
    </form>
</body>
</html>