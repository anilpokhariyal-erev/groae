<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
    // Fields that can be mass-assigned
    protected $fillable = [
        'attribute_id',
        'value',
        'description',
        'status'
    ];

    // Relationship: AttributeOption belongs to an Attribute
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    public function countInPackage()
    {
        return PackageLine::where('attribute_option_id', $this->id)->count();
    }
}
