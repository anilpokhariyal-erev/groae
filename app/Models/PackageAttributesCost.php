<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageAttributesCost extends Model
{
    use HasFactory;

    protected $table = 'package_attributes_cost';

    // Specify which fields can be mass assigned
    protected $fillable = [
        'package_id',
        'attribute_id',
        'allowed_free_qty',
        'max_allowed_qty',
        'unit_price',
        'per_unit',
    ];

    // Relationships

    public function package()
    {
        return $this->belongsTo(PackageHeader::class, 'package_id');
    }


    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
    

    public function calculateAttributeCost($attributeRequested)
    {
        $perUnit = $this->per_unit;
        $allowedFreeQty = $this->allowed_free_qty;
        $unitPrice = $this->unit_price;

        $calculatedValue = ((fmod($attributeRequested, $perUnit) + $attributeRequested) - $allowedFreeQty) * ($unitPrice / $perUnit);

        return $this->package->currency ." " . number_format($calculatedValue, 2);
    }
}
