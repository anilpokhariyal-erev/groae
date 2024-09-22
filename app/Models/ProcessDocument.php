<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Freezone;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class ProcessDocument extends Model
{
    protected $fillable = [];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    public function freezone(){
        return $this->belongsTo(Freezone::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}