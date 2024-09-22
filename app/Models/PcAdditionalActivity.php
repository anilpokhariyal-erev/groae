<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Freezone;
class PcAdditionalActivity extends Model
{
    use HasFactory;

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
