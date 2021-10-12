<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> ffac13467fcdc4e9423178d55643a30ed65d7f7a

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         DB::table('pokemons')->insert(
            [
                'id' => 1,
                'name' => 'pokemon1',
                'type_id' => 1,
                'image' => 'https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.pokepedia.fr%2Fimages%2F8%2F8b%2F%25C3%2589voli-RFVF.png%3Ffbclid%3DIwAR3SUl7UAJMwnlQbexVoMFccKPKsgLbY9Zd5vbiG4qdRKanMOdHSPnu3Ntk&h=AT0LSjvx8YGYMcOiRLCVGFkC54WT6Hc7sHDYBI_fvn4nlGQkb7xvNYsfPO6bMroZkK-WoTwvVf0Lh6F_Gnhvjkd88N0B37YHvMGQbKRYeVL5qgBD_9h1nsio3rXOH0aIYxITLg-KhUgKiOGck1aSKQ',
                'created_at' => now()
            ]
           
        );
    }
}


=======
        //
    }
}
>>>>>>> ffac13467fcdc4e9423178d55643a30ed65d7f7a
