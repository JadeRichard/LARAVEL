<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-1.jpg",
            "filter"=>"App 1",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-2.jpg",
            "filter"=>"Web 3",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-3.jpg",
            "filter"=>"App 2",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-4.jpg",
            "filter"=>"Card 2",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-5.jpg",
            "filter"=>"Web 2",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-6.jpg",
            "filter"=>"App 3",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-7.jpg",
            "filter"=>"Card 1",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-8.jpg",
            "filter"=>"Card 3",
        ]);
        DB::table('portfolios')->insert([
            "image"=>"img/portfolio/portfolio-9.jpg",
            "filter"=>"Web 3",
        ]);
    }
}
