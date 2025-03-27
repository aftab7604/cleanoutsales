<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class Sale extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
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
        'category',
    ];

    public function filters(): BelongsToMany {
        return $this->belongsToMany(Filter::class, 'sales_filters');
    }
}
