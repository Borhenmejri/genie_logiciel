<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('Hello12345*'), // This is hashed
            'role' => 'admin'
        ]);
    }
}
