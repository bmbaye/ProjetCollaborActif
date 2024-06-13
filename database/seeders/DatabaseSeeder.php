<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            // ListeSeeder::class,
            // GroupeSeeder::class,
            MembreSeeder::class,
            ListeMembreSeeder::class,
        ]);
    }
}

