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
            'name' => 'Role 1', 
            'user_id' => 1,
        ]);
        DB::table('roles')->insert([
            'name' => 'Role 2', 
            'user_id' => 2,
            
        ]);
        DB::table('roles')->insert([
            'name' => 'Role 3', 
            'user_id' => 1,
        ]);
        DB::table('roles')->insert([
            'name' => 'Role 4', 
            'user_id' => 2,
        ]);
    }
}
