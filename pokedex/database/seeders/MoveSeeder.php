<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class MoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $movesToCreate = [];
       
        $url = 'https://pokeapi.co/api/v2/move/';
       
        do {
            $response = Http::get($url);
            $content = $response->json();
           
            $url = $content['next'];
           
            $moves = $content['results'];
           
            foreach ($moves as $move) {
                $moveToCreate = [];

                $moveResponse = Http::get($move['url']);
                $moveDetails = $moveResponse->json();
               
                $moveToCreate['name'] = $moveDetails['name'];              
                $moveToCreate['id'] = $moveDetails['id'];
                // Valeur par défaut accuracy si null
                $accuracy = $moveDetails['accuracy'];

                $moveToCreate['accuracy'] = empty($accuracy)
                ? 0 : $accuracy;

                // Valeur par défaut power si null
                $power = $moveDetails['power'];

                $moveToCreate['power'] = empty($power)
                ? 0 : $power;
                // chercher type_id
                $typeIdResponse = Http::get($moveDetails['type']['url']);

                $typeId = $typeIdResponse->json();

                $moveToCreate['type_id'] = $typeId['id'];

                $movesToCreate[] = $moveToCreate;
            }
        } while (null !== $url);
        DB::table('moves')->insert($movesToCreate);
    }
}