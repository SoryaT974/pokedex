<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Move_PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'https://pokeapi.co/api/v2/pokemon/';
        do {
            // Appel HTTP à l'API
            $response = Http::get($url);
            // Il faut récupérer le json (qui est transformé en array PHP)
            $content = $response->json();
            
            // Champ contenant la page suivante
            $url = $content['next'];
            
            // Les pokemons de la page en cours
            $pokemons = $content['results'];

            foreach ($pokemons as $pokemon) {
                // On doit appeler l'API du pokémon en question pour récupérer l'image
                $pokemonResponse = Http::get($pokemon['url']);
                // Encore une fois récupérer le json de la response
                $pokemonDetails = $pokemonResponse->json();
                
                // Création de l'array de valeurs pour le create()
                $movesPokemonsToCreate = [];
                foreach ($pokemonDetails['moves'] as $pokemonMove) {
                    // Création du move pokémon en array
                    $movePokemonToCreate = [];

                    // Aller chercher l'ID du move
                    $moveResponse = Http::get($pokemonMove['move']['url']);
                    
                    $move = $moveResponse->json();

                    $movePokemonToCreate['pokemon_id'] = $pokemonDetails['id'];
                    $movePokemonToCreate['move_id'] = $move['id'];

                    // Rajouter dans l'array'
                    $movesPokemonsToCreate[] = $movePokemonToCreate;
                }
                DB::table('move_pokemon')->insert($movesPokemonsToCreate);
            }
        } while (null !== $url); // On sort quand il n'y a plus de next page
    }
}
