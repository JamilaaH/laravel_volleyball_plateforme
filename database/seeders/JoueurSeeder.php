<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            "nom"=>"Hmn",
            "prenom"=>"Jamila",
            "age"=>27,
            "phone"=>484951578,
            "email"=>"Jamila@gmail.com",
            "genre_id"=>1,
            "pays_origine"=>"Belgique",
            "role_id"=>2,
            "equipe_id"=>1,
            "photo_id"=>1,
        ]);
    }
}
