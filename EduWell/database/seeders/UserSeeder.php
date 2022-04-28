<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'lastname' => "Eren",
            'firstname' => "Sankaran",
            'age' => "18",
            'address' => "Kochi street n°7",
            'email' => "coquinou@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => "admin",
        ]);

        DB::table('users')->insert([
            'lastname' => "User2",
            'firstname' => "User2",
            'age' => "18",
            'address' => "Kochi street n°7",
            'email' => "webmaster@hotmail.com", 
            'password' => Hash::make('123456'),
            'status' => "webmaster",
        ]);

    }
}
