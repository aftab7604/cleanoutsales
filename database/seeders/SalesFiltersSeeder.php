<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesFiltersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sales_filters')->insert([
            [
                'sale_id' => 1,
                'filter_id' => 1,
            ],
            [
                'sale_id' => 2,
                'filter_id' => 6,
            ],
            [
                'sale_id' => 3,
                'filter_id' => 9,
            ]
        ]);
    }
}
