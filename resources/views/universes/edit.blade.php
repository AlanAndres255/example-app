@extends('layouts.main')
@section('title', 'Edit Universe')
@section('content')

<h1>Edit Universe</h1>
    <form action="{{ route('universes.update', $universes->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universes->name }}">
        <br><br>
        <input type="submit" value="Update">
    </form>
    <br><br>
    <button><a href="{{route('universes.index')}}">Back</a></button>
@endsection