<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Filter extends Model
{
    public function sales(): BelongsToMany
    {
        return $this->belongsToMany(Sale::class, 'sales_filters');
    }
}
