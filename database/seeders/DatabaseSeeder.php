<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('1234'),
            'role' => 'admin',
        ]);

        // Akun Dosen
        User::create([
            'name' => 'Dosen Telkom',
            'email' => 'dosen@example.com',
            'password' => Hash::make('1234'),
            'role' => 'dosen',
        ]);

        // Akun Mahasiswa
        User::create([
            'name' => 'Vito',
            'email' => 'mahasiswa@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa',
        ]);
    }
}