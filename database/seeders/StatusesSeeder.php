<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 9; $i++) {
            DB::table('statuses')->insert(
                [
                    'user_id' => 1,
                    'name' => 'Estado ' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            );
        }
    }
}
