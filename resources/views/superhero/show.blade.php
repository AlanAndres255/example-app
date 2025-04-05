@extends('layouts.main')
@section('title', 'SuperHero')
@section('content')

<h1>{{ $superheroes->name }}</h1>
    <p>Real Name: {{ $superheroes->real_name }}</p>
    <p>Gender: {{ $superheroes->gender->name  }}</p>
    <p>Universe: {{ $superheroes->universe->name  }}</p>
    <a href="{{ $superheroes->picture }}">{{ $superheroes->picture }}"</a>
    <br><br>
    <button><a href="{{route('superhero.index')}}">Back</a></button>
@endsection