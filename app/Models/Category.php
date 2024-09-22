<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryBlog;
use App\Models\Blog;
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'status', 'parent_id'];

    public function blogs(){
        return $this->belongsToMany(Blog::class, 'category_blogs');
    }

    public function haveAssignedBlog()
    {
        return $this->blogs()->count();
    }

}
