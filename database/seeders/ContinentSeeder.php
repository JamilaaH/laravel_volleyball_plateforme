<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            ["continent"=>"europe"],
            ["continent"=>"asie"],
            ["continent"=>"amerique du nord"],
            ["continent"=>"amerique du sud"],
            ["continent"=>"oceanie"],
        ]);
    }
}
