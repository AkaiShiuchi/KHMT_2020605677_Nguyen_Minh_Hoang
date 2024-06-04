<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'hoang123',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Hoang1@'),
            'status' => '1',
            'role_id' => '1',
        ]);
    }
}
