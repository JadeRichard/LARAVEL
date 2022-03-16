<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            "info"=>"Birthday",
            "text"=>"1 May 1995",
        ]);

        DB::table('abouts')->insert([
            "info"=>"Website",
            "text"=>"www.example.com",
        ]);
        DB::table('abouts')->insert([
            "info"=>"Phone",
            "text"=>"+123 456 7890",
        ]);
        DB::table('abouts')->insert([
            "info"=>"Age",
            "text"=>"30",
        ]);
        DB::table('abouts')->insert([
            "info"=>"Degree",
            "text"=>"Master",
        ]);
        DB::table('abouts')->insert([
            "info"=>"Email",
            "text"=>"email@example.com",
        ]);
        DB::table('abouts')->insert([
            "info"=>"City",
            "text"=>"New York",
        ]);
        DB::table('abouts')->insert([
            "info"=>"Freelance",
            "text"=>"Available",
        ]);
    }
}
