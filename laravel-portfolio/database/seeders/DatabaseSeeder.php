<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AboutSeeder::class,
            FactSeeder::class,
            NavlinkSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            SkillSeeder::class,
            TitleSeeder::class,
        ]);
    }
}
