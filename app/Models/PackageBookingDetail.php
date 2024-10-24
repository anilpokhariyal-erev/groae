<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageBookingDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'package_booking_id',
        'attribute_name',
        'attribute_value',
        'quantity',
        'price_per_unit',
        'total_cost',
        'description',
        'status'
    ];

    // Relationships

    // A PackageBookingDetail belongs to a PackageBooking
    public function packageBooking()
    {
        return $this->belongsTo(PackageBooking::class);
    }

    // Accessors/Mutators

    // Example accessor for status
    public function getStatusLabelAttribute()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    // Automatically calculate the total cost if it's not provided
    public function setTotalCostAttribute($value)
    {
        if (is_null($value)) {
            $this->attributes['total_cost'] = $this->quantity * $this->price_per_unit;
        } else {
            $this->attributes['total_cost'] = $value;
        }
    }
}
