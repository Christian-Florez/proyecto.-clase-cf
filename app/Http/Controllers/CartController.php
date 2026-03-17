<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        $total = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });
        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request, $productId)
    {
        $product = product::findOrFail($productId);
        $cartItem = CartItem::firstOrNew([
            'user_id' => Auth::id(),
            'product_id' => $product->id
        ]);
        $cartItem->price = $product->price;
        $cartItem->quantity += $request->input('quantity', 1);
        $cartItem->save();
        return redirect()->route('cart.index')->with('success', 'Producto agregado al carrito');
    }

    public function remove($id)
    {
        $item = CartItem::where('user_id', Auth::id())->findOrFail($id);
        $item->delete();
        return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito');
    }

    public function clear()
    {
        CartItem::where('user_id', Auth::id())->delete();
        return redirect()->route('cart.index')->with('success', 'Carrito vaciado');
    }
}
