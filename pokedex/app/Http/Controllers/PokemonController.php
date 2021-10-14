<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    public function list()
    {
        $pokemons = DB::table('pokemons')->paginate(15);

        return view('list', ['pokemons' => $pokemons]);
    }
    
    public function pokemon($id)
    {
        $pokemon = DB::table('pokemons')->find($id);

        return view('pokemon', ['pokemon' => $pokemon]);
    }
}
