<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("teams")->insert([
            "clubname" => " A club",
            "city" => "Paris",
            "country" => "France",
            "maxrole" => 3,
            "maxplayer" => 12,
        ]);
        DB::table("teams")->insert([
            "clubname" => " B club",
            "city" => "Taipei",
            "country" => "Taiwan",
            "maxrole" => 3,
            "maxplayer" => 12,
        ]);
        DB::table("teams")->insert([
            "clubname" => " C club",
            "city" => "Madrid",
            "country" => "Spain",
            "maxrole" => 3,
            "maxplayer" => 12,
        ]);
        DB::table("teams")->insert([
            "clubname" => " D club",
            "city" => "Sidney",
            "country" => "Australia",
            "maxrole" => 3,
            "maxplayer" => 12,
        ]);
        DB::table("teams")->insert([
            "clubname" => " NO TEAM",
            "city" => " ",
            "country" => " ",
            "maxrole" => 5,
            "maxplayer" => 20,
        ]);
        
    }
}
