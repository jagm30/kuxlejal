<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@kuxlejal.com'],
            [
                'name'     => 'Admin',
                'email'    => 'admin@kuxlejal.com',
                'password' => Hash::make('kuxlejal2026'),
            ]
        );
    }
}
