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
            'title' => 'Get The Latest App From App Stores',
            "description" => "Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.",
            "button_1_text" => "Free Quote",
            "button_1_link" => "#contact",
            "button_1_icon" => "<i class='fab fa-apple'></i>",
            "button_2_text" => "Free Quote",
            "button_2_link" => "#contact",
            "button_2_icon" => "<i class='fab fa-google-play'></i>",
        ]);
    }
}
