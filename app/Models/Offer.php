<?php

namespace App\Models;

use App\Models\Freezone;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $fillable = ['title', 'description', 'discount', 'image', 'priority','freezone_id'];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }

}