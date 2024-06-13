<?php

// database/seeders/GroupeSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroupeSeeder extends Seeder
{
    public function run()
    {
        DB::table('groupes')->insert([
            'nom' => 'Groupe 1',
            'listeId' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('groupes')->insert([
            'nom' => 'Groupe 2',
            'listeId' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('groupes')->insert([
            'nom' => 'Groupe 3',
            'listeId' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

