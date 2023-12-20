<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {
        $wines = Wine::all();
        return view('product', compact('wines'));
    }

    public function wineCart() {

        return view('cart');
    }

    public function addToCart($id) {
        $wine = Wine::findOrfail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else {
            $cart[$id] = [
                'name' => $wine->name,
                'quantity' => 1,
                'price' => $wine->price,
                'picture' => $wine->picture,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Wine added to cart successfully!');
    }

    public function updateCart(Request $request) {
        $cart = session()->get('cart');
        $total = 0;
        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return response()->json(['total' => $total]);
    }

    public function removeFromCart($id) {
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        unset($cart[$id]);
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Wine removed from cart successfully!');
}
}
