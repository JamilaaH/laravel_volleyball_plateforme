<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            "nom"=>"la dreamteam",
            "ville"=>"Bruxelles",
            "pays"=>"Belgique",
            "nombre"=>6,
            "continent_id"=>1,
        ]);
    }
}
