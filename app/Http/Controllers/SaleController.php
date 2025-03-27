<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function get_sales(Request $request)
    {
        // return response()->json($request);

        $query = Sale::query();

        if ($request->has('sort_by')) {
            switch ($request->sort_by) {
                case 'date_then_time':
                    $query->orderBy('start_date')->orderBy('start_time');
                    break;
                case 'distance_only':
                    break;
                case 'date_then_distance':
                    break;
                case 'newly_listed':
                    $query->orderBy('created_at', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }

        if ($request->has('days_range')) {
            $parsedDaysRange = (int) request()->get("days_range", 7);
            $dateLimit = now()->addDays($parsedDaysRange);
            $query->where('start_date', '<=', $dateLimit);
        }

        if ($request->has('filters') && is_array($request->filters)) {
            $query->whereHas('filters', function ($q) use ($request) {
                $q->whereIn('name', $request->filters);
            });
        }

        $sales = $query->get([
            'title',
            'sale_type',
            'sale_status',
            'location',
            'start_date',
            'end_date',
            'start_time',
            'company_name',
            'company_website',
            'company_phone_1',
            'company_phone_2',
            'image_url',
            'terms_conditions',
            'description',
            'external_bid_url',
            'social_links',
            'category'
        ]);

        foreach ($sales as $sale) {
            if (!filter_var($sale->image_url, FILTER_VALIDATE_URL)) {
                $sale->image_url = asset('storage/listing_images/' . $sale->image_url);
            }
        }

        return response()->json($sales);
    }
}
