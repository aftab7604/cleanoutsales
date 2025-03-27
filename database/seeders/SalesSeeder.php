<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sales')->insert([
            [
                'title' => 'Estate Auction',
                'sale_type' => 'Online',
                'sale_status' => 'Active',
                'location' => 'New York, NY',
                'start_date' => '2025-04-01',
                'end_date' => '2025-04-05',
                'start_time' => '10:00:00',
                'company_name' => 'ABC Auctions',
                'company_website' => 'https://www.abcauctions.com',
                'company_phone_1' => '+1-800-123-4567',
                'company_phone_2' => '+1-800-765-4321',
                'image_url' => 'estate_auction/2.jpg',
                'terms_conditions' => 'All sales are final. No refunds.',
                'description' => 'An exclusive estate auction featuring rare collectibles.',
                'external_bid_url' => 'https://www.bidnow.com/auction/12345',
                'social_links' => 'https://www.facebook.com/abcauctions, https://twitter.com/abcauctions',
                'category' => 'Antiques & Collectibles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Luxury Car Auction',
                'sale_type' => 'Live',
                'sale_status' => 'Upcoming',
                'location' => 'Los Angeles, CA',
                'start_date' => '2025-04-01',
                'end_date' => '2025-04-05',
                'start_time' => '08:00:00',
                'company_name' => 'Prestige Auto Auctions',
                'company_website' => 'https://www.prestigeautos.com',
                'company_phone_1' => '+1-310-555-7890',
                'company_phone_2' => '+1-310-555-6789',
                'image_url' => 'luxury_car_auction/3.jpg',
                'terms_conditions' => 'All vehicles sold as-is. No warranties provided.',
                'description' => 'A high-end auction featuring luxury and exotic cars.',
                'external_bid_url' => 'https://www.bidnow.com/auction/67890',
                'social_links' => 'https://www.instagram.com/prestigeautos, https://www.linkedin.com/company/prestigeautos',
                'category' => 'Luxury Vehicles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Art & Collectibles Auction',
                'sale_type' => 'Online & Live',
                'sale_status' => 'Ongoing',
                'location' => 'Chicago, IL',
                'start_date' => '2024-06-15',
                'end_date' => '2024-06-18',
                'start_time' => '18:00:00',
                'company_name' => 'Heritage Art Auctions',
                'company_website' => 'https://www.heritageart.com',
                'company_phone_1' => '+1-312-555-2468',
                'company_phone_2' => '+1-312-555-1357',
                'image_url' => 'art_and_collectibles_auction/1.jpg',
                'terms_conditions' => 'Buyers are responsible for shipping costs. No returns accepted.',
                'description' => 'A prestigious auction featuring rare paintings and sculptures.',
                'external_bid_url' => 'https://www.bidnow.com/auction/98765',
                'social_links' => 'https://www.pinterest.com/heritageart, https://www.youtube.com/heritageart',
                'category' => 'Fine Art & Collectibles',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
