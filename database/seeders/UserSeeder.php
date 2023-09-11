<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'DENI SUSANTO',
            'email' => 'densuz97@gmail.com',
            'password' => \bcrypt('admin')
        ];

        User::insert($user);
    }
}
