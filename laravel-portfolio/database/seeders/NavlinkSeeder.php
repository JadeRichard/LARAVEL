<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navlinks')->insert([
            "icon"=>"bx bx-home",
            "path"=>"#hero",
            "text"=>"Home",
        ]);
        DB::table('navlinks')->insert([
            "icon"=>"bx bx-user",
            "path"=>"#about",
            "text"=>"About",
        ]);
        DB::table('navlinks')->insert([
            "icon"=>"bx bx-book-content",
            "path"=>"#porfolio",
            "text"=>"Portfolio",
        ]);
        DB::table('navlinks')->insert([
            "icon"=>"bx bx-envelope",
            "path"=>"#contact",
            "text"=>"Contact",
        ]);
    }
}
