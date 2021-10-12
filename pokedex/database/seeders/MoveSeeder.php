<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('moves')->insert(
            [
                'id' => 1,
                'name' => 'pokemon1',
                'type_id' => 1,
                'power' => 20,
                'accuracy' => 80,
                'created_at' => now()
            ]
           
        );


    }
}
