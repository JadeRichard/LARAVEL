<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'subtitle' => 'Welcome to our school', 
            'title' => 'Best Place To Learn Graphic <em>Design!</em>',
            'image' => 'banner-right-image.png', 
            'button' => 'Join Us Now!',
        ]);
    }
}
