<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnneeSeeser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annees')->insert([
            ['libelle'=> '2022'] ,
            ['libelle'=> '2021'] ,
            ['libelle'=> '2023'] ,
            ['libelle'=> '2024'] ,
            ['libelle'=> '2025'] ,
        ]);
    }
}
