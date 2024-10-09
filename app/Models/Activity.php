<?php

namespace App\Models;

use App\Models\Freezone;
use App\Models\ActivityGroup;
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
        'freezone_id'
    ];

    public function activity_group()
    {
        return $this->belongsTo(ActivityGroup::class);
    }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
