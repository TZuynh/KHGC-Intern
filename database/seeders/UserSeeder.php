<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() > 0) {
            return;
        }

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'name' => (new \App\Models\User)->setNameAttribute(),
            'email' => 'superadmin@khgc.com',
            'password' => Hash::make('Abcd@1234'),
            'role' => 'admin',
        ]);
    }
}
