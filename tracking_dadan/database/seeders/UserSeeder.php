<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('password')
        ]);

        $member = \App\Models\User::create([
            'name'=> 'Sample Member',
            'role'=> 'member',
            'email'=> 'member@gmail.com',
            'password'=> bcrypt('password')
        ]);
    }
}
