<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class OtherService extends Model
{

    protected $fillable = [];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

}