<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageHeader extends Model
{
    use SoftDeletes;

    // Fields that can be mass-assigned
    protected $fillable = [
        'title',
        'description',
        'freezone_id',
        'price',
        'renewable_price',
        'discounted_price',
        'currency',
        'trending',
        'visa_package',
        'allowed_free_packages',
        'status',
        'updated_by',
    ];

    // Relationship: PackageHeader belongs to a Freezone
    public function freezone()
    {
        return $this->belongsTo(Freezone::class, 'freezone_id');
    }

    // Relationship: PackageHeader has many PackageLines
    public function packageLines()
    {
        return $this->hasMany(PackageLine::class, 'package_id', 'id');
    }

    public function attributeCosts()
    {
        return $this->hasMany(PackageAttributesCost::class, 'package_id');
    }

}
