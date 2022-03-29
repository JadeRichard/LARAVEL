<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            'name' => 'Commentaire 1', 
            'contenu' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed natus saepe animi facilis repellendus earum ex est nostrum mollitia temporibus soluta, maiores eum rem nihil fugiat voluptatem porro quia libero?',
            'article_id' => 1,
        ]);
        DB::table('commentaires')->insert([
            'name' => 'Commentaire 2', 
            'contenu' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed natus saepe animi facilis repellendus earum ex est nostrum mollitia temporibus soluta, maiores eum rem nihil fugiat voluptatem porro quia libero?',
            'article_id' => 1,
        ]);
        DB::table('commentaires')->insert([
            'name' => 'Commentaire 3', 
            'contenu' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed natus saepe animi facilis repellendus earum ex est nostrum mollitia temporibus soluta, maiores eum rem nihil fugiat voluptatem porro quia libero?',
            'article_id' => 2,
        ]);
    }
}
