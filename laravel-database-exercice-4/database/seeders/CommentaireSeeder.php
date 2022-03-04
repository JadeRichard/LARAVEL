<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            "nom" => "Nom Comm 1", 
            "prenom" => "Prenom Comm 1",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 1",
            "poste" => "Poste 1", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 2", 
            "prenom" => "Prenom Comm 2",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 2",
            "poste" => "Poste 2", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 3", 
            "prenom" => "Prenom Comm 3",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 3",
            "poste" => "Poste 3", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 4", 
            "prenom" => "Prenom Comm 4",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 4",
            "poste" => "Poste 4", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 5", 
            "prenom" => "Prenom Comm 5",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 5",
            "poste" => "Poste 5", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 6", 
            "prenom" => "Prenom Comm 6",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 6",
            "poste" => "Poste 6", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 7", 
            "prenom" => "Prenom Comm 7",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 7",
            "poste" => "Poste 7", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 8", 
            "prenom" => "Prenom Comm 8",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 8",
            "poste" => "Poste 8", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 9", 
            "prenom" => "Prenom Comm 9",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 9",
            "poste" => "Poste 9", 
            "created_at" => now()
        ]);
        DB::table('commentaires')->insert([
            "nom" => "Nom Comm 10", 
            "prenom" => "Prenom Comm 10",
            "publicationdate" => Carbon::create('2000', '01', '01'),
            "commentaire" => "Commentaire Comm 10",
            "poste" => "Poste 10", 
            "created_at" => now()
        ]);
    }
}
