@extends('layouts.main')
@section('title','Show Gender')
@section('content')

    <h1>{{ $gender->name }}</h1>
    <p>{{ $gender -> id}}</p>
    <br><br>
    <button><a href="{{route('genders.index')}}">Back</a></button>
@endsection