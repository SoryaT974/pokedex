<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PokeApi\Api;

class DefaultController extends Controller
{
    public function home()
    {
        $api = new Api();
        $pokemons = $api->findAllPokemon();
        // dd($pokemons);
        return view('homepage');
    }
    
    
}
