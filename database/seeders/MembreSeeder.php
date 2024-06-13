<?php

// database/seeders/MembreSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MembreSeeder extends Seeder
{
    public function run()
    {
        DB::table('membres')->insert([
            'nom' => 'Doe',
            'prenom' => 'John',
            'categorieId' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('membres')->insert([
            'nom' => 'Smith',
            'prenom' => 'Jane',
            'categorieId' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('membres')->insert([
            'nom' => 'Johnson',
            'prenom' => 'Jake',
            'categorieId' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

