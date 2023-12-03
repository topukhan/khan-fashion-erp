<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('products.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->dd()
        $validated = $request->validate([
            'name' => 'string | unique:categories',
            'description' => 'max:255'
        ]);

        try {
            Category::create($validated);
            return redirect()->route('categories.index')->with('message', 'Category created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('products.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('products.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'string|unique:categories,name,' . $category->id,
            'description' => 'max:255'
        ]);

        try {
            $category->update($validated);

            return redirect()->route('categories.index', $category->id)->with('message', 'Category updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        
        $category->delete();
        return redirect()->route('categories.index')->withMessage("Category Deleted!");
    }
}
