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
            "source"=>"<i class='bx bxl-twitter'></i>",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"<i class='bx bxl-facebook'></i>",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"<i class='bx bxl-instagram'></i>",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"<i class='bx bxl-skype'></i>",
            "link"=>"#",
        ]);
        DB::table('icons')->insert([
            "source"=>"<i class='bx bxl-linkedin'></i>",
            "link"=>"#",
        ]);
    }
}
