@extends('layouts.main')

@section('title', 'SuperHeroes')

@section('content')
<h1>SuperHeroes</h1>
<hr>
<a href="{{ route('superhero.create') }}">Create Superhero</a>
<hr>
<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Real Name</th>
        <th>Gender</th>
        <th>Universe</th>
        <th>Picture</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($superheroes as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->real_name }}</td>
            <td>{{ $item->gender->name }}</td>
            <td>{{ $item->universe->name }}</td>
            <td>{{ $item->picture }}</td>
            <td>
                <a href="{{ route('superhero.show', $item->id) }}">Show</a>
                <a href="{{ route('superhero.edit', $item->id) }}">Edit</a>
                <form action="{{ route('superhero.destroy', $item->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection