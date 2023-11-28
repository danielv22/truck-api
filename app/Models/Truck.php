<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_brand',
        'truck_reference',
        'plate_number',
        'model',
        'color',
        'capacity',
        'vehicle_inspection_expiration_date',
        'insurance_expiration_date',
        'registration_expiration_date',
        'status',
        'category_id'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
