<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            "icon"=>"bi bi-emoji-smile",
            "number"=>"232",
            "important"=>"Happy Clients",
            "text"=>"consequuntur quae",
        ]);
        DB::table('facts')->insert([
            "icon"=>"bi bi-journal-richtext",
            "number"=>"521",
            "important"=>"Projects",
            "text"=>"adipisci atque cum quia aut",
        ]);
        DB::table('facts')->insert([
            "icon"=>"bi bi-headset",
            "number"=>"1453",
            "important"=>"Hours Of Support",
            "text"=>"aut commodi quaerat",
        ]);
        DB::table('facts')->insert([
            "icon"=>"bi bi-people",
            "number"=>"32",
            "important"=>"hard Workers",
            "text"=>"rerum asperiores dolor",
        ]);
    }
}
