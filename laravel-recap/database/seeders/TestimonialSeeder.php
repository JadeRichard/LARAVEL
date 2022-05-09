<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "name" => "David Martino Co",
            "date" => "2021-11-20",
            "rating" => 4.8,
            "designation" => "CEO of David Company",
            "category" => "Financial Apps",
            "description" => "Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.",
            "photo" => "client-image.jpg",
        ]);

        DB::table('testimonials')->insert([
            "name" => "Jake Harris Nyo",
            "date" => "2021-11-29",
            "rating" => 4.5,
            "designation" => "CTO of Digital Company",
            "category" => "Digital Business",
            "description" => "CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.",
            "photo" => "client-image.jpg",
        ]);
        
        DB::table('testimonials')->insert([
            "name" => "May Catherina",
            "date" => "2021-11-27",
            "rating" => 4.7,
            "designation" => "Founder of Catherina Co.",
            "category" => "Business & Economics",
            "description" => "May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.",
            "photo" => "client-image.jpg",
        ]);
        
        DB::table('testimonials')->insert([
            "name" => "Random User",
            "date" => "2021-11-24",
            "rating" => 3.9,
            "designation" => "Manager, Digital Company",
            "category" => "New App Ecosystem",
            "description" => "Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.",
            "photo" => "client-image.jpg",
        ]);
        
        DB::table('testimonials')->insert([
            "name" => "Mark Amber Do",
            "date" => "2021-11-21",
            "rating" => 4.3,
            "designation" => "CTO, Amber Do Company",
            "category" => "Web Development",
            "description" => "Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.",
            "photo" => "client-image.jpg",
        ]);
    }
}
