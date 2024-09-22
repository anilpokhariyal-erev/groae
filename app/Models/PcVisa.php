<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Freezone;
class PcVisa extends Model
{

    use SoftDeletes;

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    public function freezone(){
        return $this->belongsTo(Freezone::class);
    }

}