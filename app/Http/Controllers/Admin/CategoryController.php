<?php

namespace App\Http\Controllers\Admin;

use App\Assets\Utils;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::orderBy('id', 'desc');

        if($request->start_date && !$request->end_date){ 
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if($request->end_date && !$request->start_date){ 
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ]);

        if($request->start_date){
            $categories = $categories->whereBetween('created_at', [$request->start_date.' 00:00:00', $request->end_date.' 23:59:59']);
        }

        if($request->keyword){ 
            $categories = $categories->where('name', 'LIKE', "%{$request->keyword}%");
        }

        $categories = $categories->paginate(Utils::itemPerPage);

        return view('admin.category.category_index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.category.category_create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:categories',
            'slug' => 'required|string|max:100|unique:categories',
            'status' => 'required|boolean',
        ]);

        Category::create($request->all());
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        $categories = Category::where('status', 1)->where('id', '!=', $category->id)->get();
        return view('admin.category.category_edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'slug' => 'required|unique:categories,slug,' . $category->id,
            'status' => 'required|boolean',
        ]);

        $category->update($request->all());
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        if ($category->haveAssignedBlog()){
            return redirect()->route('category.index')->with('error', 'Cannot delete category. It is associated with one or more blogs.');
        }

        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
