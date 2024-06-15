<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Lancer la migration pour obtenir remplir les tables automatiquement en vue de tester l'application.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DepartementSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(AnneeSeeser::class);
         \App\Models\User::factory(10)->create();
    }
}
