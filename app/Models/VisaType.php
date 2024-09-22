<?php

namespace App\Models;

use App\Models\Freezone;
use App\Models\VisaActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaType extends Model
{
    use HasFactory, SoftDeletes;

    public function visa_activities()
    {
        return $this->belongsToMany(VisaActivity::class);
    }

    // public function freezones()
    // {
    //     return $this->belongsToMany(Freezone::class);
    // }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
