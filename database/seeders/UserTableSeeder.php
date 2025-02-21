<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123123123'),
                'status' => 'active',
                'role' => 'admin',
            ],
            [
                // Vendor
                'name' => 'Vendor',
                'email' => 'vendor@vendor.com',
                'password' => Hash::make('123123123'),
                'status' => 'active',
                'role' => 'vendor',
            ],
            [
                // User
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => Hash::make('123123123'),
                'status' => 'active',
                'role' => 'user',
            ],
        ]);
    }
}
