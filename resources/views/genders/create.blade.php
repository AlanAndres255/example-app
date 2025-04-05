@extends('layouts.main')
@section('title','Create Gender')
@section('content')
    <h1>Create Gender</h1>
    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" required>
        <br><br>
        <button type="submit">Create Genders</button>
    </form>
    <br><br>
    <button><a href="{{route('genders.index')}}">Back</a></button>
@endsection