<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Star wars</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>
        Star Wars API </h1>

        <a href="/">MOVIES AND ACTORS</a>
    <form method="POST" action="/starwars/search">
    @csrf
        <label for='search'>
            Search star wars API
        </label>
    <input type="text" id='search' name='search'>
    <input type="submit" value='Search'>

    @foreach ($people['results'] as $person)
    <p>
        <h3>{{$person['name'] }}</h3>
        <strong>Height</strong> {{$person['height'] }}
        <strong>Gender</strong> {{$person['gender'] }}
        <strong>Birth year</strong> {{$person['birth_year'] }}
    </p>
        @endforeach
</form>

    </body>
</html>
