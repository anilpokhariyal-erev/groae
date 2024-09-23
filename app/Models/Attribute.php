<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    // Fields that can be mass-assigned
    protected $fillable = [
        'name',
        'label',
        'status',
        'is_ai_search_enabled'
    ];

    // Relationship: Attribute has many AttributeOptions
    public function options()
    {
        return $this->hasMany(AttributeOption::class, 'attribute_id');
    }
}
