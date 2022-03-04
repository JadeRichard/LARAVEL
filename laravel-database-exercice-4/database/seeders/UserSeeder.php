<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nom" => "Nom 1", 
            "prenom" => "Prenom 1",
            "age" => 20,
            "email" => "Email 1",
            "adresse" => "Adresse 1",
            "mdp" => "******", 
            "telnumber" => 01020304,
            "commune" => "Commune 1",
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            "nom" => "Nom 2", 
            "prenom" => "Prenom 2",
            "age" => 20,
            "email" => "Email 2",
            "adresse" => "Adresse 2",
            "mdp" => "******", 
            "telnumber" => 01020304,
            "commune" => "Commune 2",
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            "nom" => "Nom 3", 
            "prenom" => "Prenom 3",
            "age" => 20,
            "email" => "Email 3",
            "adresse" => "Adresse 3",
            "mdp" => "******", 
            "telnumber" => 01020304,
            "commune" => "Commune 3",
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            "nom" => "Nom 4", 
            "prenom" => "Prenom 4",
            "age" => 20,
            "email" => "Email 4",
            "adresse" => "Adresse 4",
            "mdp" => "******", 
            "telnumber" => 01020304,
            "commune" => "Commune 4",
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            "nom" => "Nom 5", 
            "prenom" => "Prenom 5",
            "age" => 20,
            "email" => "Email 5",
            "adresse" => "Adresse 5",
            "mdp" => "******", 
            "telnumber" => 01020304,
            "commune" => "Commune 5",
            "created_at" => now()
        ]);
    }
}
