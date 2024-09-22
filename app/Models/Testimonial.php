<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $fillable = ['name', 'logo'];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

}