<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'password' => Hash::make('12345678'),//$2y$12$mrOXn9Zddlf28jctNyU8POEMA//SVWXFKs3ACK8qySI7Lm.UWNTpC
        ]);
    }
}
