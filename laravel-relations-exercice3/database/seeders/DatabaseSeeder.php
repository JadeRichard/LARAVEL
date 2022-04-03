<?php

namespace Database\Seeders;

use App\Models\Player;
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
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            TeamSeeder::class,
            RoleSeeder::class,
        ]);
        
        Player::factory(24)->create();

        $this->call([
            PhotoSeeder::class,
        ]);
    }
}
