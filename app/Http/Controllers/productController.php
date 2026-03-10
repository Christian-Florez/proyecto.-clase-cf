<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productList = product::paginate(9);
        return view('product.index',[
            "productList" => $productList
        ]);
    }

    public function create()
    {
        $categories = category::all();
        return view("product.create", [
            'categories' => $categories
        ]);
    }
    public function show($id, $categoria = null)
    {
        if ($categoria == null) {
            return "producto: $id";
        } else {
            return "producto: $id categoria $categoria";
        }
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        // basic validation matching database columns
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'stock' => 'nullable|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new product();
        $product->name = $data['nombre'];
        $product->slug = \Illuminate\Support\Str::slug($data['nombre']);
        $product->description = $data['descripcion'] ?? null;
        $product->price = $data['price'];
        $product->stock = $data['stock'] ?? 0;
        $product->category_id = $data['category_id'] ?? 1;

        // Handle image upload
        if ($request->hasFile('image')) {
            $ruta = $request->file('image')->store('productos', 'public');
            $product->image = $ruta;
        } else {
            $product->image = null;
        }

        $product->save();

        return redirect('/product/index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect('/product/index')->with('success', 'Producto eliminado correctamente');
    }

}
