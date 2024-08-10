<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin user',
                'username' => 'admin-1',
                'email' => 'admin@sloteam.com',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ],
            [
                'name' => 'Coach user',
                'username' => 'Coach Nadir',
                'email' => 'coach@sloteam.com',
                'password' => bcrypt('password'),
                'role' => 'coach'
            ],
            [
                'name' => 'User user',
                'username' => 'User Alpha',
                'email' => 'user@sloteam.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ]
            ]);
    }
}
