<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Blog extends Model
{

    protected $fillable = [];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_blogs')->withTimestamps();
    }

}