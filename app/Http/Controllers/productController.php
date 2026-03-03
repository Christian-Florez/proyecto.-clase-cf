<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $producttList = product::all();
        return view('product.index',[
            "productList" => $producttList
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
        ]);




        $product = new product();
        $product->name = $data['nombre'];
        $product->slug = \Illuminate\Support\Str::slug($data['nombre']);
        $product->description = $data['descripcion'] ?? null;
        $product->price = $data['price'];
        $product->stock = $data['stock'] ?? 0;
        $product->category_id = $data['category_id'] ?? 1; // default to first category
        $product->save();

        return redirect('/product/index')->with('success', 'Producto creado correctamente');
    }

}
