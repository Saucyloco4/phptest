<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actors and movies</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <h1>
        Actors and movies</h1>
        <a href="/starwars">STAR WARS API</a>
    <form method="POST" action="/actors/filter">
    @csrf
        <label for='search'>
            Search actor
        </label>
    <input type="text" id='search' name='search'>
    <input type="submit" value='Search'>
</form>
    @foreach ($actors as $actor)
    <p>
        <h3>{{$actor->name . " " . $actor->lastname}}</h3>
        @foreach ($actor->movies as $movie)
            <div>
                {{$movie->title}}
            </div>
        @endforeach
    <p>
    </p>
        @endforeach

    </body>
</html>
