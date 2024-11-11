<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    // Fields that can be mass-assigned
    protected $fillable = [
        'name',
        'label',
        'allow_any',
        'allow_multiple',
        'is_ai_search_enabled',
        'ai_filter_display_order',
        'show_in_calculator',
        'status',
    ];

    // Relationship: Attribute has many AttributeOptions
    public function options()
    {
        return $this->hasMany(AttributeOption::class, 'attribute_id')->where('status', 1);
    }

    public function countInPackage()
    {
        return PackageLine::where('attribute_id', $this->id)->count();
    }

    public function defaultAttributes()
    {
        return $this->hasMany(FreezoneDefaultAttribute::class, 'attribute_id');
    }

    public function packageAttributesCost()
    {
        return $this->hasMany(PackageAttributesCost::class, 'attribute_id')->where('status',1);
    }

}
