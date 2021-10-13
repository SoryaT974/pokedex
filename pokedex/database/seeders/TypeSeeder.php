<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typesToCreate = [];
       
        $url = 'https://pokeapi.co/api/v2/type/';
        do {
            $response = Http::get($url);
            $content = $response->json();

            $url = $content['next'];

            $types = $content['results'];
           
            foreach ($types as $type) {
                $typeToCreate = [];

                $typeResponse = Http::get($type['url']);
                $typeDetails = $typeResponse->json();
               
                $typeToCreate['name'] = $type['name'];
                $typeToCreate['id'] = null;

                $typesToCreate[] = $typeToCreate;
            }
        } while (null !== $url);
        DB::table('types')->insert($typesToCreate);
    }
}
