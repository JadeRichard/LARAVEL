<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'image' => 'logo.png',
            "image_title" => "Logo",
        ]);

        DB::table('images')->insert([
            'image' => 'slider-dec.png',
            "image_title" => "Slider",
        ]);

        DB::table('images')->insert([
            'image' => 'about-right-dec.png',
            "image_title" => "About",
        ]);
        DB::table('images')->insert([
            'image' => 'white-logo.png',
            "image_title" => "Logo Footer",
        ]);
    }
}
