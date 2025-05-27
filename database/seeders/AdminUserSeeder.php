<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin PerpusBerdua',
            'email' => 'admin@perpusberdua.test',
            'password' => Hash::make('admin123'), // password di-hash
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
