<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eleves')->insert([
            "nom" => "Nom 1", 
            "prenom" => "Prenom 1",
            "email" => "email 1",
            "adresse" => "addresse 1",
            "date" => Carbon::create('2000', '01', '01'),
            "adresseip" => "00.00.00.00", 
            "created_at" => now()
        ]);
        DB::table('eleves')->insert([
            "nom" => "Nom 2", 
            "prenom" => "Prenom 2",
            "email" => "email 2",
            "adresse" => "addresse 2",
            "date" => Carbon::create('2000', '01', '01'),
            "adresseip" => "00.00.00.00", 
            "created_at" => now()
        ]);
        DB::table('eleves')->insert([
            "nom" => "Nom 3", 
            "prenom" => "Prenom 3",
            "email" => "email 3",
            "adresse" => "addresse 3",
            "date" => Carbon::create('2000', '01', '01'),
            "adresseip" => "00.00.00.00", 
            "created_at" => now()
        ]);
    }
}
