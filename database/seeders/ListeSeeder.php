<?php

// database/seeders/ListeSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ListeSeeder extends Seeder
{
    public function run()
    {
        DB::table('listes')->insert([
            'nomListe' => 'Liste 1',
            'nombreMembre' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('listes')->insert([
            'nomListe' => 'Liste 2',
            'nombreMembre' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
