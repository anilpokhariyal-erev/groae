<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'route', 'icon', 'parent_id', 'is_active'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->where('is_active', true);
    }
}
