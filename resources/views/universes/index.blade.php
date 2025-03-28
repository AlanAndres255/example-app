<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Test</title>
</head>
<body>
    <h1> Universe</h1>
    <hr> 
    <a href="{{ route('universes.create') }}">Create Universer</a>
    <hr>
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
            </thead>
            <tbody> 
               @foreach($universes as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> name}}</td>
                    <td>
                        <a href="{{route('universes.show', $item->id)}}">Show</a>
                        <a href="{{route('universes.edit', $item->id)}}">Edit</a>
                    </td>
                    <td>
                    <form action="{{ route('universes.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>