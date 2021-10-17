<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Move;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    public function list()
    {
        $pokemons = Pokemon::paginate(15);

        return view('list', ['pokemons' => $pokemons]);
    }
    
    public function pokemon($id)
    {
        $pokemon = Pokemon::where('id', $id)->first();

        return view('pokemon', ['pokemon' => $pokemon]);
    }
    
    public function create()
    {
        $types = Type::all();
        $moves = Move::all();

        return view('create', ['types' => $types, 'moves' => $moves]);
    }
    
    public function postCreate(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|unique:pokemons',
            'type' => 'required',
            'image' => ''
        ]);
        
        $pokemon = new Pokemon();
        $pokemon->name = $request->input('name');
        $pokemon->image = $request->input('image');
        $pokemon->type_id = $request->input('type');
        $pokemon->save();
        
        return redirect()->route('pokemon', $pokemon->id);
    }
    
    public function update($id)
    {
        $pokemon = Pokemon::find($id);
        $types = Type::all();

        return view('update', ['pokemon' => $pokemon, 'types' => $types]);
    }
    
    public function postUpdate(Request $request)
    {
        return redirect()->route('pokemon', $pokemon->id);
    }
    
    public function delete($id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();

        return redirect()->route('pokemons');
    }
}
