<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Move_pokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('move_pokemon')->insert(
            [
                'move_id' => 1,
                'pokemon_id' => 1,
                'created_at' => now()
            ]
           
        );
    }
}
