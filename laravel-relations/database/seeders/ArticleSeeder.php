<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'name' => 'Article 1', 
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed natus saepe animi facilis repellendus earum ex est nostrum mollitia temporibus soluta, maiores eum rem nihil fugiat voluptatem porro quia libero?'
        ]);
        DB::table('articles')->insert([
            'name' => 'Article 2', 
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed natus saepe animi facilis repellendus earum ex est nostrum mollitia temporibus soluta, maiores eum rem nihil fugiat voluptatem porro quia libero?'
        ]);
    }
}
