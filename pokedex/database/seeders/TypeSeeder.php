<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'id' => 1,
            'name' => 'pokemon1',
            'created_at' => now()
        ]
    ]);
    }
}
