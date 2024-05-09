<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\UserLevelEnum;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Admin user',
            'email' => 'admin@filament-bug.test',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'is_admin' => 1,
            'user_level' => UserLevelEnum::Admin,
        ]);

        $user = User::create([
            'name' => 'Test user',
            'email' => 'test@filament-bug.test',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'is_admin' => 0,
            'user_level' => UserLevelEnum::Standard
        ]);
    }
}
