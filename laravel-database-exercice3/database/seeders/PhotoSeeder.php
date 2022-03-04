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
        DB::table('photos')->insert([
            "name" => "Photo 1", 
            "path" => "img/photo1.jpg", 
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "name" => "Photo 2", 
            "path" => "img/photo2.jpg", 
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "name" => "Photo 3", 
            "path" => "img/photo3.jpg", 
            "created_at" => now()
        ]);
    }
}
