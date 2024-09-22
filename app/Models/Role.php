<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Support\Str;

class Role extends SpatieRole
{
    protected $fillable = ['uuid', 'name', 'type', 'guard_name'];

    protected static function booted()
    {
        static::creating(function ($role) {
            $role->uuid = Str::uuid();
        });
    }
}
