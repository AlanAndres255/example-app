@extends('layouts.main')
@section('title', 'Show Universe')
@section('content')
    <h1>{{ $universes->name }}</h1>
    <p>{{ $universes->id }}</p>
    <br><br>
    <button><a href="{{route('universes.index')}}">Back</a></button>
@endsection
