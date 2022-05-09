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
            'name' => "Admin",

        ]);
        DB::table('roles')->insert([
            'name' => "Webmaster",
            
        ]);
        DB::table('roles')->insert([
            'name' => "Role3",
            
        ]);
        DB::table('roles')->insert([
            'name' => "Role4",
            
        ]);
    }
}
