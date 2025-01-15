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
            'roll'=>'1',
            'password' =>Hash::make('121212')
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => "user@gmail.com",
            'roll'=>'0',
            'password' =>Hash::make('121212')
        ]);
    }
}
