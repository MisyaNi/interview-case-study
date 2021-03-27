<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PriceMarkupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_markup')->insert(
        [
            [
            'percentage' => '0.30',
            'user_role_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'percentage' => '0.05',
            'user_role_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]
    );
    }
}
