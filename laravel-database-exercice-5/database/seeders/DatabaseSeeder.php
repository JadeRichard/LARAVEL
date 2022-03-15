<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Equipe;
use App\Models\Portfolio;
use App\Models\User;
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
        User::factory()->count(20)->create();
        Article::factory()->count(30)->create();
        Portfolio::factory()->count(10)->create();
        Equipe::factory()->count(50)->create();
    }
}
