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
}
