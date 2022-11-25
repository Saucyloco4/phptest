<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\ActorMovie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Actor::create([
            'name' => 'Job',
            'lastname' => 'Fonseca',
        ]);
        Actor::create([
            'name' => 'Will',
            'lastname' => 'Smith',
        ]);
        Actor::create([
            'name' => 'Jackie',
            'lastname' => 'Chan',
        ]);
        Actor::create([
            'name' => 'Dwayne',
            'lastname' => 'Johnson',
        ]);
        Actor::create([
            'name' => 'Eugenio',
            'lastname' => 'Derbez',
        ]);


        Movie::create([
            'title' => 'Avengers',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Action',
        ]);
        Movie::create([
            'title' => 'Avengers infinity war',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Action',
        ]);
        Movie::create([
            'title' => 'Fantastic 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Action',
        ]);
        Movie::create([
            'title' => 'Jurrasic park',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Action',
        ]);
        Movie::create([
            'title' => 'Avatar',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Action',
        ]);
        Movie::create([
            'title' => 'Titanic',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Drama',
        ]);
        Movie::create([
            'title' => 'Hangover',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Comedy',
        ]);
        Movie::create([
            'title' => 'Ted',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Comedy',
        ]);
        Movie::create([
            'title' => 'IT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Horror',
        ]);
        Movie::create([
            'title' => 'Paranormal activity',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque varius est. Praesent vitae nibh dictum, pretium turpis sit amet, fringilla quam',
            'genre' => 'Horror',
        ]);


        ActorMovie::create([
            'actor_id' => 1,
            'movie_id' => 1,
        ]);
        ActorMovie::create([
            'actor_id' => 1,
            'movie_id' => 2,
        ]);
        ActorMovie::create([
            'actor_id' => 1,
            'movie_id' => 3,
        ]);


        ActorMovie::create([
            'actor_id' => 2,
            'movie_id' => 2,
        ]);
        ActorMovie::create([
            'actor_id' => 2,
            'movie_id' => 3,
        ]);
        ActorMovie::create([
            'actor_id' => 2,
            'movie_id' => 4,
        ]);


        ActorMovie::create([
            'actor_id' => 3,
            'movie_id' => 3,
        ]);
        ActorMovie::create([
            'actor_id' => 3,
            'movie_id' => 5,
        ]);
        ActorMovie::create([
            'actor_id' => 3,
            'movie_id' => 6,
        ]);


        ActorMovie::create([
            'actor_id' => 4,
            'movie_id' => 6,
        ]);
        ActorMovie::create([
            'actor_id' => 4,
            'movie_id' => 7,
        ]);
        ActorMovie::create([
            'actor_id' => 4,
            'movie_id' => 8,
        ]);


        ActorMovie::create([
            'actor_id' => 5,
            'movie_id' => 8,
        ]);
        ActorMovie::create([
            'actor_id' => 5,
            'movie_id' => 9,
        ]);
        ActorMovie::create([
            'actor_id' => 5,
            'movie_id' => 10,
        ]);
    }
}
