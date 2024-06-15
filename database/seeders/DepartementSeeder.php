<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departements')->insert([
            ['libelle'=> 'Informatique'] ,
            ['libelle'=> 'Transit'] ,
            ['libelle'=> 'Commercial'] ,
            ['libelle'=> 'Service Recrouvrement'] ,
            ['libelle'=> 'Comptabilite'] ,
        ]);
    }
}
