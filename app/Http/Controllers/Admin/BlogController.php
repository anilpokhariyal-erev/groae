<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Assets\Utils;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Assets\ResponseMessage;
use DB;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $blogs = Blog::orderBy('id', 'desc');

        if ($request->start_date && !$request->end_date) {
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if ($request->end_date && !$request->start_date) {
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ],[
            'start_date' => 'The selected date is incorrect.'
        ]);

        if ($request->start_date) {
            $blogs = $blogs->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        }

        if ($request->title) {
            $blogs = $blogs->where('title', 'LIKE', "%{$request->title}%");
        }

        $blogs = $blogs->paginate(Utils::itemPerPage);
        return view('admin.blog.blog_index', compact('blogs'));
    }


    public function create()
    {
        $category = Category::where('status', 1)->get();
        return view('admin.blog.blog_create', compact('category'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'youtube_link' => 'nullable|url|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
            'category' => 'required|array',
            'category.*' => 'required|integer',
            'description' => 'required|string',
        ], [
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]);

        DB::beginTransaction();

        try {

            //$originalName = time().'_'.$request->file('image')->getClientOriginalName();
            //$image_path = $request->file('image')->storeAs('public/freezone/blog', $originalName);

            $originalName = 'blogs/' . time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
            Storage::put($originalName, file_get_contents($request->file('image')), 'public');

            $title = strtolower($request->title);

            $blog = new Blog;
            $blog->title = $title;
            $blog->short_description = $request->short_description;
            $blog->youtube_link = $request->youtube_link;
            $blog->image = $originalName;
            $blog->description = $request->description;
            $blog->slug = trim(str_replace(' ', '-', $title));
            $blog->save();

            $blog->categories()->attach($request->category);
            DB::commit();
            return redirect()->route('blog.index')->with('success', 'Blog created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
            //return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function edit(string $uuid)
    {
        $blog = Blog::with('categories')->where('uuid', $uuid)->first();
        $category = Category::where('status', 1)->get();
        $assigned_category = $blog->categories->pluck('id')->toArray();

        if ($blog) {
            return view('admin.blog.blog_edit', compact('blog', 'category', 'assigned_category'));
        }

        return abort(404);
    }


    public function update(Request $request, string $uuid)
    {
        $blog = Blog::where('uuid', $uuid)->first();

        if (!$blog) {
            return abort(404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'youtube_link' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000',
            'description' => 'required|string',
            'category' => 'required|array',
            'category.*' => 'required|integer',
        ], [
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG, and SVG images are allowed.',
            'image.max' => 'The image size should not exceed 5MB.',
        ]);
        DB::beginTransaction();
        try {
            if ($request->file('image')) {
                Storage::delete($blog->image);
                // $originalName = time().'_'.$request->file('image')->getClientOriginalName();
                // $image_path = $request->file('image')->storeAs('public/freezone/blog', $originalName);
                // $blog->image = $image_path;

                $originalName = 'blogs/' . time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
                Storage::put($originalName, file_get_contents($request->file('image')), 'public');
                $blog->image = $originalName;
            }

            $blog->title = $request->title;
            $blog->short_description = $request->short_description;
            $blog->youtube_link = $request->youtube_link;
            $blog->description = $request->description;
            $blog->save();

            $blog->categories()->sync($request->category);
            DB::commit();
            return back()->with('success', 'Blog Updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }


    public function destroy(string $uuid)
    {
        $blog = Blog::where('uuid', $uuid)->first();

        if (!$blog) {
            return abort(404);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog Deleted successfully');
    }
}
