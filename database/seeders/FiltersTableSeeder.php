<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FiltersTableSeeder extends Seeder
{
    public function run()
    {
        $filters = [
            'estate_sales',
            'moving_sales',
            'moved_offsite_to_warehouse',
            'by_appointment',
            'online_estate_sales',
            'auctions',
            'auction_house',
            'online_only_auctions',
            'business_closings',
            'moved_offsite_to_store',
            'outside_sales',
            'single_item_collections',
            'buyouts_or_cleanouts',
            'demolition_sales'
        ];

        foreach ($filters as $filter) {
            DB::table('filters')->insert([
                'name' => $filter,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
