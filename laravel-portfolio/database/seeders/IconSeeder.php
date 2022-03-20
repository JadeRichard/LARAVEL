<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            "source"=>"bx bxl-twitter",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"bx bxl-facebook",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"bx bxl-instagram",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"bx bxl-skype",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"bx bxl-linkedin",
            "link"=>"#",
        ]);
    }
}
