<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->save();

        return redirect('/borrowedBooks')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'books' => $category->books,
            'category' => $category->name
        ]);
    }

}
