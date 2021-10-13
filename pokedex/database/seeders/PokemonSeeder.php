<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     DB::table('pokemons')->insert(
        [
            'id' => 1,
            'name' => 'Bulbizarre',
            'type_id' => 1,
            'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png',
            'created_at' => now()
        ]);
        
    DB::table('pokemons')->insert(
        [
            'id' => 2,
            'name' => 'Herbizarre',
            'type_id' => 1,
            'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png',
            'created_at' => now()
        ]);
        
    DB::table('pokemons')->insert(
        [
            'id' => 3,
            'name' => 'Florizarre',
            'type_id' => 1,
            'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png',
            'created_at' => now()
        ]);
    }
}


        

