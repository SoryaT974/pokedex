<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> ffac13467fcdc4e9423178d55643a30ed65d7f7a

class MoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
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
=======
        //
>>>>>>> ffac13467fcdc4e9423178d55643a30ed65d7f7a
    }
}
