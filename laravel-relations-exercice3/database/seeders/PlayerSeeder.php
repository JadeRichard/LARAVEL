<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\IntegerRange;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("players")->insert([
            "name" => "Leblanc",
            "firstname" => "Bernard",
            "age" => 30,
            "telnumber" => "0X XX XX XX",
            "email" => "bernardleblanc@gmail.com",
            "gender" => "M",
            "country" => "France",
            // "role" => "Front",
            "role_id" => 1,
            "team_id" => 1,
        ]);
        DB::table("players")->insert([
            "name" => "Lebrun",
            "firstname" => "Bertrand",
            "age" => 32,
            "telnumber" => "0X XX XX XX",
            "email" => "bertrandlebrun@gmail.com",
            "gender" => "M",
            "country" => "France",
            // "role" => "Back",
            "role_id" => 3,
            "team_id" => 1,
        ]);
        DB::table("players")->insert([
            "name" => "Legrand",
            "firstname" => "Gérard",
            "age" => 31,
            "telnumber" => "0X XX XX XX",
            "email" => "gerardlegrand@gmail.com",
            "gender" => "M",
            "country" => "France",
            // "role" => "Middle",
            "role_id" => 2,
            "team_id" => 1,
        ]);
        DB::table("players")->insert([
            "name" => "Beaugrand",
            "firstname" => "Arthur",
            "age" => 30,
            "telnumber" => "0X XX XX XX",
            "email" => "arthurbeaugrand@gmail.com",
            "gender" => "M",
            "country" => "France",
            // "role" => "Substitute",
            "role_id" => 4,
            "team_id" => 1,
        ]);
        DB::table("players")->insert([
            "name" => "Beckers",
            "firstname" => "Chris",
            "age" => 32,
            "telnumber" => "0X XX XX XX",
            "email" => "chrisbeckers@gmail.com",
            "gender" => "M",
            "country" => "Australia",
            // "role" => "Substitute",
            "role_id" => 4,
            "team_id" => 1,
        ]);
        DB::table("players")->insert([
            "name" => "Lin",
            "firstname" => "Shu-hui",
            "age" => 33,
            "telnumber" => "0X XX XX XX",
            "email" => "shuhuilin@gmail.com",
            "gender" => "F",
            "country" => "Taiwan",
            // "role" => "Middle",
            "role_id" => 2,
            "team_id" => 2,
        ]);
        DB::table("players")->insert([
            "name" => "Reyes",
            "firstname" => "Rosa",
            "age" => 30,
            "telnumber" => "0X XX XX XX",
            "email" => "rosareyes@gmail.com",
            "gender" => "F",
            "country" => "Spain",
            // "role" => "Back",
            "role_id" => 3,
            "team_id" => 3,
        ]);
        DB::table("players")->insert([
            "name" => "Alvarez",
            "firstname" => "Marisol",
            "age" => 32,
            "telnumber" => "0X XX XX XX",
            "email" => "marisolalvarez@gmail.com",
            "gender" => "F",
            "country" => "Spain",
            // "role" => "Front",
            "role_id" => 1,
            "team_id" => 3,
        ]);
        DB::table("players")->insert([
            "name" => "Suarez",
            "firstname" => "Sara",
            "age" => 30,
            "telnumber" => "0X XX XX XX",
            "email" => "sarasuarez@gmail.com",
            "gender" => "F",
            "country" => "Spain",
            // "role" => "Middle",
            "role_id" => 2,
            "team_id" => 3,
        ]);
        DB::table("players")->insert([
            "name" => "Flores",
            "firstname" => "María",
            "age" => 32,
            "telnumber" => "0X XX XX XX",
            "email" => "mariaflores@gmail.com",
            "gender" => "F",
            "country" => "Spain",
            // "role" => "Substitute",
            "role_id" => 4,
            "team_id" => 3,
        ]);
        DB::table("players")->insert([
            "name" => "Uzaihsazi",
            "firstname" => "Jnedezidhuz",
            "age" => 32,
            "telnumber" => "0X XX XX XX",
            "email" => "jnedezidhuzuzaihsazi@gmail.com",
            "gender" => "F",
            "country" => "France",
            // "role" => "Middle",
            "role_id" => 2,
            "team_id" => 1,
        ]);
        DB::table("players")->insert([
            "name" => "Aaaa",
            "firstname" => "Bbbb",
            "age" => 34,
            "telnumber" => "0X XX XX XX",
            "email" => "Aaaabbbb@gmail.com",
            "gender" => "M",
            "country" => "Taiwan",
            // "role" => "Substitute",
            "role_id" => 4,
            "team_id" => 2,
        ]);
        DB::table("players")->insert([
            "name" => "Jizjod",
            "firstname" => "Loidjzej",
            "age" => 35,
            "telnumber" => "0X XX XX XX",
            "email" => "loidjzejjizjod@gmail.com",
            "gender" => "F",
            "country" => "Australia",
            // "role" => "Front",
            "role_id" => 1,
            "team_id" => null,
        ]);
        DB::table("players")->insert([
            "name" => "C",
            "firstname" => "D",
            "age" => 32,
            "telnumber" => "0X XX XX XX",
            "email" => "cd@gmail.com",
            "gender" => "M",
            "country" => "Switzerland",
            // "role" => "Back",
            "role_id" => 3,
            "team_id" => null,
        ]);
    }
}
