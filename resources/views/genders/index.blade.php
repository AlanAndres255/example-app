@extends('layouts.main')
@section('title','Gender')
@section('content')
    <h1> Gender</h1>
    <hr>
    <a href="{{ route('genders.create') }}">Create Gender</a>
    <hr>
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
            </thead>
            <tbody> 
               @foreach($genders as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> name}}</td>
                    <td>
                        <a href="{{route('genders.show', $item->id)}}">Show</a>
                        <a href="{{route('genders.edit', $item->id)}}">Edit</a>
                    </td>
                    <td>
                    <form action="{{ route('genders.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
