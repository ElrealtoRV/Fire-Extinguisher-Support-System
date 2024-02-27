<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Ronver',
            'middle_name' => 'Alburo',
            'last_name' => 'Amper',
            'position' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ])->assignRole('admin');

    }
}
