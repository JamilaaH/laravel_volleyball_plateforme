<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                "nom"=>"attaquant",
                "max"=>2
            ],
            [
                "nom"=>"défense",  
                "max"=>2
            ],
            [
                "nom"=>"central",
                "max"=>2
            ],
            [
                "nom"=>"remplacement",
                "max"=>2
            ],
            ]);
    }
}
