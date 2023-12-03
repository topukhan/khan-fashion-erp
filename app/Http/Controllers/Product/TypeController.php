<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('products.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string | unique:types',
        ]);

        try {
            Type::create($validated);
            return redirect()->route('types.index')->with('message', 'Type created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('products.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('products.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $validated = $request->validate([
            'name' => 'string|unique:types,name,' . $type->id,
        ]);

        try {
            $type->update($validated);

            return redirect()->route('types.index', $type->id)->with('message', 'Type updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        
        $type->delete();
        return redirect()->route('types.index')->withMessage("Type Deleted!");
    }
}