<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class adminEntrie extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => "admin@gmail.com",
            'mobile' => "7770824060",
            'roll'=>'1',
            'password' =>Hash::make('121212')
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => "user@gmail.com",
            'mobile' => "7770824061",
            'roll'=>'0',
            'password' =>Hash::make('121212')
        ]);
    }
}
