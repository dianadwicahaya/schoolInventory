<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // pastikan model User ada
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password123'), // ubah kalau mau password lain
            ]
        );
    }
}
