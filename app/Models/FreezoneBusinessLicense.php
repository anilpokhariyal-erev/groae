<?php

namespace App\Models;

use App\Models\Freezone;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class FreezoneBusinessLicense extends Model
{
    protected $fillable = ['name', 'image', 'addition_info'];

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