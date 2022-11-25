<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StarwarsController extends Controller
{
    public function getAll()
    {
        $response = Http::get('https://swapi.dev/api/people/');
        return view('starwars', ['people' => $response]);
    }
    public function getStarwars()
    {
        $search = request("search");
        $response = Http::get('https://swapi.dev/api/people/?search=' . $search);
        return view('starwars', ['people' => $response]);
    }
}
