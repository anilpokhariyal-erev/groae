<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageLine extends Model
{
    use SoftDeletes;

    // Fields that can be mass-assigned
    protected $fillable = [
        'package_id',
        'attribute_id',
        'attribute_option_id',
        'addon_cost',
        'status'
    ];

    // Relationship: PackageLine belongs to a PackageHeader
    public function package()
    {
        return $this->belongsTo(PackageHeader::class, 'package_id');
    }

    // Relationship: PackageLine belongs to an Attribute
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    // Relationship: PackageLine belongs to an AttributeOption
    public function attributeOption()
    {
        return $this->belongsTo(AttributeOption::class, 'attribute_option_id');
    }
}
