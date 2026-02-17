<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return "listado de productos";
    }

    public function create()
    {
        return "crear un prodcuto de products";
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
