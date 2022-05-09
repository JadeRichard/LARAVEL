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
            'name' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Webmaster',
            'email' => 'webmaster@webmaster.webmaster',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Other',
            'email' => 'other@other.other',
            'password' => Hash::make('123456'),
        ]);
    }
}
