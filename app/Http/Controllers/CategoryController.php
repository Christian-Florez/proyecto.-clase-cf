<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::paginate(10);
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $data['slug'] = \Str::slug($data['name']);
        category::create($data);
        return redirect()->route('category.index')->with('success', 'Categoría creada correctamente');
    }

    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $category = category::findOrFail($id);
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Categoría actualizada correctamente');
    }

    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Categoría eliminada correctamente');
    }
}
