@extends('layouts.main')
@section('title', 'Create Superheros')
@section('content')

<h1>Create SuperHero</h1>
    <form action="{{ route('superhero.store') }}" method="post">
        @csrf
        <label for="">Gender</label>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="">Universe</label>
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="">Real Name</label>
        <input type="text" name="real_name">
        <br><br>
        <label for="">Superhero Name</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Picture URL</label>
        <input type="text" name="picture">
        <br><br>
        <input type="submit" value="Create">
    </form>
    <br><br>
    <button><a href="{{route('superhero.index')}}">Back</a></button>
@endsection