<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;
use Illuminate\Support\Str;

class Permission extends SpatiePermission
{
    protected $fillable = ['uuid', 'name', 'type'];

    protected static function booted()
    {
        static::creating(function ($permission) {
            $permission->uuid = Str::uuid();
        });
    }
}
