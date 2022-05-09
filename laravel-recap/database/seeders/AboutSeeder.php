<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'Maintance Problems',
            "description" => "Lorem Ipsum Text",
            "link" => "#",
        ]);
        DB::table('abouts')->insert([
            'title' => '24/7 Support & Help',
            "description" => "Lorem Ipsum Text",
            "link" => "#",
        ]);
        DB::table('abouts')->insert([
            'title' => 'Fixing Issues About',
            "description" => "Lorem Ipsum Text",
            "link" => "#",
        ]);
        DB::table('abouts')->insert([
            'title' => 'Co. Development',
            "description" => "Lorem Ipsum Text",
            "link" => "#",
        ]);
    }
}
