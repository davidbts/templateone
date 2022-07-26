<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'role' => 'admin',
                'name' => 'Francisco',
                'lastname' => 'Dimas',
                'nickname' => 'pacoDimas',
                'email' => 'paco_dimas@outlook.com',
                'password' => Hash::make('Francisco#3'),
                'registered' => 1,
                'last_connection' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
