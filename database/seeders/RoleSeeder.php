<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            ['name' => 'ROLE_ADMIN', 'description' => 'admin'],
            ['name' => 'ROLE_USER', 'description' => 'normal user']
        ];

        Role::insert($role);
    }
}
