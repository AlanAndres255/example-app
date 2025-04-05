@extends ('layouts.main')
@section('title', 'Create Universe')
@section('content')
<h1> Create Universe</h1>
    <form action="{{route ('universes.store')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <br><br>
        <button type="submit">Create Universe</button>
    </form>
    <br><br>
    <button><a href="{{route('universes.index')}}">Back</a></button>
@endsection