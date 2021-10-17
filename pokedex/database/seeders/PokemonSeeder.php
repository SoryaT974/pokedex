<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création de l'array de valeurs pour le create()
        $pokemonsToCreate = [];
        
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
                // Création du pokémon en array
                $pokemonToCreate = [];
                
                // On doit appeler l'API du pokémon en question pour récupérer l'image
                $pokemonResponse = Http::get($pokemon['url']);
                // Encore une fois récupérer le json de la response
                $pokemonDetails = $pokemonResponse->json();

                // Il faut aller chercher loin l'image dans l'array
                $image = $pokemonDetails['sprites']['other']['official-artwork']['front_default'];
                $pokemonToCreate['image'] = empty($image)
                ? 'https://i.ebayimg.com/images/g/YkYAAOSwTQxgRqw~/s-l400.jpg' : $image;

                $pokemonToCreate['id'] = $pokemonDetails['id'];
                $pokemonToCreate['name'] = $pokemon['name'];
                
                 // Aller chercher l'ID du type
                 
                
                $typeResponse = Http::get($pokemonDetails['types'][0]['type']['url']);
                
                $pokemonType = $typeResponse->json();
                
                $pokemonToCreate['type_id'] = $pokemonType['id'];
                
                
                // Rajouter dans l'array'
                $pokemonsToCreate[] = $pokemonToCreate;
            }
        } while (null !== $url); // On sort quand il n'y a plus de next page
        
        DB::table('pokemons')->insert($pokemonsToCreate);
    }
}
