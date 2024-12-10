<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample users
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
