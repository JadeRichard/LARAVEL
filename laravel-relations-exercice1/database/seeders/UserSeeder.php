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
        /*$table->string('name');
            $table->string('firstname');
            $table->string('age');
            $table->string('email');
            $table->string('password');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('role');*/
            DB::table('users')->insert([
                'name' => 'Name 1', 
                'firstname' => 'FirstName 1', 
                'age' => 20, 
                'email' => 'Email 1', 
                'password' => 'Password 1', 
                'birthdate' => '1973-02-13',
                'gender' => 'M', 
                'role' => 'Role 1', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 2', 
                'firstname' => 'FirstName 2', 
                'age' => 32, 
                'email' => 'Email 2', 
                'password' => 'Password 2', 
                'birthdate' => '1973-02-13',
                'gender' => 'M', 
                'role' => 'Role 2', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 3', 
                'firstname' => 'FirstName 3', 
                'age' => 33, 
                'email' => 'Email 3', 
                'password' => 'Password 3', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 3', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 4', 
                'firstname' => 'FirstName 4', 
                'age' => 21, 
                'email' => 'Email 4', 
                'password' => 'Password 4', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 4', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 5', 
                'firstname' => 'FirstName 5', 
                'age' => 11, 
                'email' => 'Email 5', 
                'password' => 'Password 5', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 5', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 6', 
                'firstname' => 'FirstName 6', 
                'age' => 32, 
                'email' => 'Email 6', 
                'password' => 'Password 6', 
                'birthdate' => '1973-02-13',
                'gender' => 'M', 
                'role' => 'Role 6', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 7', 
                'firstname' => 'FirstName 7', 
                'age' => 33, 
                'email' => 'Email 7', 
                'password' => 'Password 7', 
                'birthdate' => '1973-02-13',
                'gender' => 'NB', 
                'role' => 'Role 7', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 8', 
                'firstname' => 'FirstName 8', 
                'age' => 35, 
                'email' => 'Email 8', 
                'password' => 'Password 8', 
                'birthdate' => '1973-02-13', 
                'gender' => 'M', 
                'role' => 'Role 8', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 9', 
                'firstname' => 'FirstName 9', 
                'age' => 55, 
                'email' => 'Email 9', 
                'password' => 'Password 9', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 9', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 10', 
                'firstname' => 'FirstName 10', 
                'age' => 73, 
                'email' => 'Email 10', 
                'password' => 'Password 10', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 10', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 11', 
                'firstname' => 'FirstName 11', 
                'age' => 55, 
                'email' => 'Email 11', 
                'password' => 'Password 11', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 11', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 12', 
                'firstname' => 'FirstName 12', 
                'age' => 53, 
                'email' => 'Email 12', 
                'password' => 'Password 12', 
                'birthdate' => '1973-02-13',
                'gender' => 'M', 
                'role' => 'Role 12', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 13', 
                'firstname' => 'FirstName 13', 
                'age' => 35, 
                'email' => 'Email 13', 
                'password' => 'Password 13', 
                'birthdate' => '1973-02-13',
                'gender' => 'M', 
                'role' => 'Role 13', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 14', 
                'firstname' => 'FirstName 14', 
                'age' => 33, 
                'email' => 'Email 14', 
                'password' => 'Password 14', 
                'birthdate' => '1973-02-13',
                'gender' => 'NB', 
                'role' => 'Role 14', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 15', 
                'firstname' => 'FirstName 15', 
                'age' => 22, 
                'email' => 'Email 15', 
                'password' => 'Password 15', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 15', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 16', 
                'firstname' => 'FirstName 16', 
                'age' => 23, 
                'email' => 'Email 16', 
                'password' => 'Password 16', 
                'birthdate' => '1973-02-13',
                'gender' => 'NB', 
                'role' => 'Role 16', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 17', 
                'firstname' => 'FirstName 17', 
                'age' => 43, 
                'email' => 'Email 17', 
                'password' => 'Password 17', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 17', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 18', 
                'firstname' => 'FirstName 18', 
                'age' => 33, 
                'email' => 'Email 18', 
                'password' => 'Password 18', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 18', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 19', 
                'firstname' => 'FirstName 19', 
                'age' => 66, 
                'email' => 'Email 19', 
                'password' => 'Password 19', 
                'birthdate' => '1973-02-13',
                'gender' => 'M', 
                'role' => 'Role 19', 
                
            ]);
            DB::table('users')->insert([
                'name' => 'Name 20', 
                'firstname' => 'FirstName 20', 
                'age' => 76, 
                'email' => 'Email 20', 
                'password' => 'Password 20', 
                'birthdate' => '1973-02-13',
                'gender' => 'F', 
                'role' => 'Role 20', 
                
            ]);
        
    }
}
