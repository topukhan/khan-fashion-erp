<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('products.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string | unique:colors',
        ]);

        try {
            Color::create($validated);
            return redirect()->route('colors.index')->with('message', 'Color created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        return view('products.colors.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('products.colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $validated = $request->validate([
            'name' => 'string|unique:colors,name,' . $color->id,
        ]);

        try {
            $color->update($validated);

            return redirect()->route('colors.index', $color->id)->with('message', 'Color updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        
        $color->delete();
        return redirect()->route('colors.index')->withMessage("Color Deleted!");
    }
}
