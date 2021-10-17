<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Move;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovePokemonController extends Controller
{
    public function addMovePokemon($pokemonId)
    {
        $pokemon = Pokemon::find($pokemonId);
        $moves = Move::where('type_id', $pokemon->type_id)->get();
        
        return view('movePokemon.add', ['pokemon' => $pokemon, 'moves' => $moves]);
    }
    
    public function postAddMovePokemon(Request $request, $pokemonId)
    {
        $pokemon = Pokemon::find($pokemonId);
        $move = Move::find($request->input('move'));

        $pokemon->moves()->save($move);

        return redirect()->route('pokemon.update', $pokemon->id);
    }
    
    public function delete($pokemonId, $moveId)
    {
        $move = Move::find($moveId);

        $pokemon = Pokemon::find($pokemonId);

        $pokemon->moves()->detach($move);

        return redirect()->route('pokemon.update', $pokemon->id);
    }
}