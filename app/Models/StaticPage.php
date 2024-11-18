<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $fillable = [
        'uuid',
        'page_name',
        'description',
        'image',
        'slug',
        'visible_in_footer',
        'parent_id',
        'visible_in_header',
    ];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    /**
     * Relationship for parent page.
     */
    public function parent()
    {
        return $this->belongsTo(StaticPage::class, 'parent_id');
    }

    /**
     * Relationship for child pages.
     */
    public function children()
    {
        return $this->hasMany(StaticPage::class, 'parent_id');
    }
}
