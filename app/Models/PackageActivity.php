<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageActivity extends Model
{
    // Fields that can be mass-assigned
    protected $fillable = [
        'package_id',
        'activity_id',
        'price',
        'status',
        'allowed_free'
    ];

    // Relationship: PackageActivity belongs to a PackageHeader
    public function package()
    {
        return $this->belongsTo(PackageHeader::class, 'package_id');
    }

    // Relationship: PackageActivity belongs to an Activity
    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
