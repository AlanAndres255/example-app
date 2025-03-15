<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inico</title>
</head>
<body>
    <h1>SuperHero</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Real Name</th>
            <th>Gender id</th>
            <th>Universe id</th>
            <th>Picture</th>
        </thead>
            <tbody>
                @foreach($superheroes as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> real_name}}</td>
                    <td>{{$item -> gender_id}}</td>
                    <td>{{$item -> universe_id}}</td>
                    <td>{{$item -> picture}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>