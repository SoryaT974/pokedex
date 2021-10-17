<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class DefaultController extends Controller
{
    public function home()
    {
        $pokemons = Pokemon::paginate(15);

        return view('list', ['pokemons' => $pokemons]);
    }
}
