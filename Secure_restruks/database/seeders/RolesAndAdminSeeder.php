<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RolesAndAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Create Super Admin role if not exists
        $role = Role::firstOrCreate(
            ['name' => 'Super Admin', 'guard_name' => 'web']
        );

        // Create admin user (use your email/password)
        $admin = User::firstOrCreate(
            ['email' => 'adikhanofficial@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // change after first login
            ]
        );

        // Assign role to admin if not already assigned
        if (! $admin->hasRole('Super Admin')) {
            $admin->assignRole($role);
        }
    }
}
