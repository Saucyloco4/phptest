<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $appends = ['movies'];
    public function getMoviesAttribute()
    {
        return $this->movies()->get();
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, "actors_movies");
    }
}
