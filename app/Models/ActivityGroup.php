<?php

namespace App\Models;

use App\Models\Activity;
use App\Models\Freezone;
use App\Models\License;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActivityGroup extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'freezone_id',
        'licence_id',
        'code'
    ];
    
    protected $hidden = ['pivot'];

    public function activities()
    {
        return $this->hasMany(Activity::class);
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
