<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class adminEntrie extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'abdul',
            'email' => "abdul@gmail.com",
            'roll'=>'1',
            'password' =>bcrypt('12345678')
        ]);
    }
}
