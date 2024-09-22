<?php

namespace App\Models;

use App\Models\Freezone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class License extends Model
{
    use HasFactory, SoftDeletes;

    // public function freezones()
    // {
    //     return $this->belongsToMany(Freezone::class);
    // }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
