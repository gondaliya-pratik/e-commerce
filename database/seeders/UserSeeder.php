<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'testuser',
            'email' => 'testuser@gmail.com',
            'password' => Hash::make('test@123'),
        ];

        $user = User::create($admin);

        $role = [
            'role_id' => 1,
            'user_id' => 1,
        ];

        $user = RoleUser::create($role);
    }
}
