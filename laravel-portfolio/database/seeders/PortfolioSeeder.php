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
            "image"=>"portfolio/portfolio-1.jpg",
            "title"=>"App 1",
            "filter"=>"app"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-2.jpg",
            "title"=>"Web 3",
            "filter"=>"web"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-3.jpg",
            "title"=>"App 2",
            "filter"=>"app"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-4.jpg",
            "title"=>"Card 2",
            "filter"=>"card"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-5.jpg",
            "title"=>"Web 2",
            "filter"=>"web"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-6.jpg",
            "title"=>"App 3",
            "filter"=>"app"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-7.jpg",
            "title"=>"Card 1",
            "filter"=>"card"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-8.jpg",
            "title"=>"Card 3",
            "filter"=>"card"
        ]);
        DB::table('portfolios')->insert([
            "image"=>"portfolio/portfolio-9.jpg",
            "title"=>"Web 3",
            "filter"=>"web"
        ]);
    }
}
