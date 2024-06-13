<?php

// database/seeders/ListeMembreSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ListeMembreSeeder extends Seeder
{
    public function run()
    {
        DB::table('liste_membres')->insert([
            'listeId' => 1,
            'membreId' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('liste_membres')->insert([
            'listeId' => 1,
            'membreId' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('liste_membres')->insert([
            'listeId' => 2,
            'membreId' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
