<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
        {
            $this->call([
                Move_PokemonSeeder::class,
                MoveSeeder::class,
                PokemonSeeder::class,
                TypeSeeder::class
            ]);
        }

}
