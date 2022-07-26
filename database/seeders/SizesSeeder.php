<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 9; $i++) {
            DB::table('sizes')->insert(
                [
                    'user_id' => 1,
                    'name' => 'Talla ' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            );
        }
    }
}
