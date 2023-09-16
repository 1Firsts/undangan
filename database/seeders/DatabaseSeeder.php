<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menggunakan factory untuk membuat 10 user
        User::factory(10)->create();
        
        // Menambahkan satu user tambahan dengan email tertentu
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('test@example.com'),
            'remember_token' => Str::random(10),
        ]);
    }
}
