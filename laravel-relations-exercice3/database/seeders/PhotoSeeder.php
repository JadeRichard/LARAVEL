<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 1, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 2, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 3, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 4, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 5, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 6, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 7, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 8, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 9, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 10, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 11, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 12, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 13, 
        ]);
        DB::table("photos")->insert([
            "img" => "...",
            "player_id" => 14, 
        ]);

    }
}
