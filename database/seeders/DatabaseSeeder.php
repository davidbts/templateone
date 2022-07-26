<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        $this->call(ElementsSeeder::class);
        $this->call(SizesSeeder::class);
        $this->call(StatusesSeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
