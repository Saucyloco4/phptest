<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Facades\Http;

class ActorController extends Controller
{
    public function getAll()
    {
        $actors = Actor::get();
        return view('welcome', ['actors' => $actors]);
    }

    public function filter()
    {
        $search = request("search");
        $actors = Actor::where('name', 'like', "%{$search}%")
            ->orWhere('lastname', 'like', "%{$search}%")->get();
        return view('welcome', ['actors' => $actors]);
    }
}
