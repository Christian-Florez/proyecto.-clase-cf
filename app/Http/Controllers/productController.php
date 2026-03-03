<?php

namespace App\Http\Controllers;

use App\Models\product;
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
        return view("product.create");
    }
    public function show($id, $categoria = null)
    {
        if ($categoria == null) {
            return "producto: $id";
        } else {
            return "producto: $id categoria $categoria";
        }
    }

}
