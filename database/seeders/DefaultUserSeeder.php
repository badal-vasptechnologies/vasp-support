<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Badal', 
            'email' => 'badal@vasptechnologies.co.in',
            'password' => Hash::make('badal1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin', 
            'email' => 'admin@vasptechnologies.co.in',
            'password' => Hash::make('admin1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Manager', 
            'email' => 'manager@vasptechnologies.co.in',
            'password' => Hash::make('manager1234')
        ]);
        $productManager->assignRole('Product Manager');

        // Creating Application User
        $user = User::create([
            'name' => 'Application', 
            'email' => 'application@vasptechnologies.co.in',
            'password' => Hash::make('application1234')
        ]);
        $user->assignRole('User');
    }
}