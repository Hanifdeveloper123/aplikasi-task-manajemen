<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@boilerplate.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rahasia123')
        ]);
        $super_admin->assignRole('super admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@boilerplate.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rahasia123')
        ]);
        $user->assignRole('user');
    }
}
