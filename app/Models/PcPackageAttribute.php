<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PcPackage;
class PcPackageAttribute extends Model
{

    use SoftDeletes;

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    public function package(){
        return $this->belongsToMany(PcPackage::class, 'package_attribute_linking');
    }

}