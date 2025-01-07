<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => "admin@gmail.com",
            'roll'=>'1',
            'password' => '$2y$12$mrOXn9Zddlf28jctNyU8POEMA//SVWXFKs3ACK8qySI7Lm.UWNTpC', // Hash::make('12345678'),//$2y$12$mrOXn9Zddlf28jctNyU8POEMA//SVWXFKs3ACK8qySI7Lm.UWNTpC
        ]);
    }
}
