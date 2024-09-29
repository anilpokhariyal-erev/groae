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
        'is_ai_search_enabled',
        'show_in_calculator'
    ];

    // Relationship: Attribute has many AttributeOptions
    public function options()
    {
        return $this->hasMany(AttributeOption::class, 'attribute_id');
    }

    public function countInPackage()
    {
        return PackageLine::where('attribute_id', $this->id)->count();
    }
}
