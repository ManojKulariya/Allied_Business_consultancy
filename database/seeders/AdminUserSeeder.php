<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = User::query()->firstOrCreate(
            ['email' => 'admin@alliedbusiness.com'],
            [
                'name' => 'Super Admin',
                'password' => 'Admin@12345', // hashed via cast
                'status' => 1,
                'email_verified_at' => now(),
            ]
        );
        $superAdmin->syncRoles('super-admin');

        $editor = User::query()->firstOrCreate(
            ['email' => 'editor@alliedbusiness.com'],
            [
                'name' => 'Content Editor',
                'password' => 'Editor@12345',
                'status' => 1,
                'email_verified_at' => now(),
            ]
        );
        $editor->syncRoles('editor');
    }
}
