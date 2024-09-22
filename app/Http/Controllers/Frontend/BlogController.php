<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function blogs(Request $request, $category_slug = null)
    {
        $blogs = Blog::select('id', 'title', 'short_description', 'image', 'slug', 'created_at');
        if ($request->search)
            $blogs->where('title', 'LIKE', "%{$request->search}%")
                ->orWhere('short_description', 'LIKE', "%{$request->search}%");

        $search = $request->search;
        $categories = Category::withCount(['blogs' => function ($query) use ($search) {
            if ($search)
                $query->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('short_description', 'LIKE', "%{$search}%");
        }])->whereHas('blogs', function ($query) use ($search) {
            if ($search)
                $query->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('short_description', 'LIKE', "%{$search}%");
        })->get();

        $total_blog_count = $blogs->clone()->count();

        if ($request->category)
            $blogs->whereHas('categories', function ($query) use ($request) {
                return $query->where('slug', '=', $request->category);
            });

        $blogs = $blogs->orderBy('id', 'DESC')->paginate(9);

        return view('frontend.blogs.blogs', compact('total_blog_count', 'blogs', 'categories'));
    }

    public function blog_detail($slug)
    {
        $blog_detail = Blog::where('slug', $slug)->first();
        $category_ids = $blog_detail->categories->pluck('id')->toArray();
        $related_blogs = Blog::with('categories')->whereHas('categories', function ($query) use ($category_ids) {
            return $query->whereIn('categories.id', $category_ids);
        })->select('id', 'title', 'short_description', 'image', 'slug', 'created_at')->take(5)->get();
        $category = Category::withCount('blogs')->whereHas('blogs')->get();
        return view('frontend.blogs.blog-detail', compact('blog_detail', 'related_blogs', 'category'));
    }
}
