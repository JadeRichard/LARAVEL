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
            "icon"=>"<i class='bx bx-home'></i>",
            "path"=>"#hero",
            "text"=>"Home",
        ]);
        DB::table('navlinks')->insert([
            "icon"=>"<i class='bx bx-user'></i>",
            "path"=>"#about",
            "text"=>"About",
        ]);
        DB::table('navlinks')->insert([
            "icon"=>"<i class='bx bx-book-content'></i>",
            "path"=>"#porfolio",
            "text"=>"Portfolio",
        ]);
        DB::table('navlinks')->insert([
            "icon"=>"<i class='bx bx-envelope'></i>",
            "path"=>"#contact",
            "text"=>"Contact",
        ]);
    }
}
