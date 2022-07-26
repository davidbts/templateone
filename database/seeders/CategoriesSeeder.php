<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'user_id' => 1,
                    'name' => 'mujer',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 1,
                    'name' => 'hombre',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 1,
                    'name' => 'niñas',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 1,
                    'name' => 'niños',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 1,
                    'name' => 'bebes',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
