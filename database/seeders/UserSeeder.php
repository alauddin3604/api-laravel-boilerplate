<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Enums\UserStatus;
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
        $admin = User::updateOrCreate([
            'email' => 'admin@mail.test',
        ], [
            'password' => bcrypt('password'),
        ]);

        $admin->markEmailAsVerified();

        $admin->assignRole(RolesEnum::ADMIN);
    }
}
