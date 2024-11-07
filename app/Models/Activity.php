<?php

namespace App\Models;

use App\Models\Freezone;
use App\Models\ActivityGroup;
use App\Models\License;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the fillable attributes
    protected $fillable = [
        'name',         
        'description', 
        'price', 
        'activity_group_id',
        'freezone_id',
        'licence_id',
        'code',
    ];

    public function activity_group()
    {
        return $this->belongsTo(ActivityGroup::class);
    }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }

    public function license()
    {
        return $this->belongsTo(License::class, 'licence_id');
    }
}
