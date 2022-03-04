<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            "nom" => "Nom Role 1", 
            "prenom" => "Prenom Role 1",
        ]);
        DB::table('roles')->insert([
            "nom" => "Nom Role 2", 
            "prenom" => "Prenom Role 2",
        ]);
        DB::table('roles')->insert([
            "nom" => "Nom Role 3", 
            "prenom" => "Prenom Role 3",
        ]);
        DB::table('roles')->insert([
            "nom" => "Nom Role 4", 
            "prenom" => "Prenom Role 4",
        ]);
        DB::table('roles')->insert([
            "nom" => "Nom Role 5", 
            "prenom" => "Prenom Role 5",
        ]);

    }
}