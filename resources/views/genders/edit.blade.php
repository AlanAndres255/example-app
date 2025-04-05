@extends('layouts.main')
@section('title', 'Edit Gender')
@section('content')
    <h1>Edit Gender</h1>
    <form action="{{ route('genders.update', $gender->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $gender->name }}">
        <br><br>
        <input type="submit" value="Update">
    </form>
    <br><br>
    <button><a href="{{route('genders.index')}}">Back</a></button>
@endsection