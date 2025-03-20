<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inico</title>
</head>
<body>
    <h1>SuperHero</h1>
    <hr>
    <a href="{{ route('superhero.create') }}">Create Superhero</a>
    <hr>
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
                    <td>
                        <a href="{{route('superhero.show', $item->id)}}">Show</a>
                        <a href="{{route('superhero.edit', $item->id)}}">Edit</a>
                    </td>
                    <td>
                    <form action="{{ route('superhero.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>