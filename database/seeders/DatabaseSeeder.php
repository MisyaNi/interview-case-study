<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            PriceMarkupSeeder::class,
            ProductsSeeder::class,
            UserRoleSeeder::class,
        ]);
    }
}
