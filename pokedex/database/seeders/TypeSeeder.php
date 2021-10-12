<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> ffac13467fcdc4e9423178d55643a30ed65d7f7a

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('types')->insert(
            [
                'id' => 1,
                'name' => 'pokemon1',
                'created_at' => now()
            ]
           
        );
=======
        DB::table('users')->insert([
        [
            'id' => 1,
            'name' => 'pokemon1',
            'created_at' => now()
        ]
    ]);
>>>>>>> ffac13467fcdc4e9423178d55643a30ed65d7f7a
    }
}
