<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit SuperHero</title>
</head>
<body>
    <h1>Edit SuperHero</h1>
    <form action="{{ route('superhero.update', $superheroes->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="">Gender</label>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}"
                    @if($gender->id == $superheroes->gender_id)
                        selected
                    @endif
                    >{{ $gender->name }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="">Universo</label>
        <select name="universe_id">
           @foreach($universes as $universe)
               <option value="{{ $universe->id }}"
                 @if($universe->id == $superheroes->universe_id)
                selected
            @endif
            >{{ $universe->name }}</option>
        @endforeach
        </select>
        <br><br>
        <label for="">Real Name</label>
        <input type="text" name="real_name" value="{{ $superheroes->real_name }}">
        <br><br>
        <label for="">Superhero Name</label>
        <input type="text" name="name" value="{{ $superheroes->name }}">
        <br><br>
        <label for="">Picture URL</label>
        <input type="text" name="picture" value="{{ $superheroes->picture }}">
        <br><br>
        <input type="submit" value="Create" value="{{ $superheroes->id }}">
    </form>
    <br><br>
    <button><a href="{{route('superhero.index')}}">Back</a></button>
</body>
</html>