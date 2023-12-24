<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {
        $wines = Wine::paginate(8);
        return view('home', compact('wines'));
    }

    public function wineCart() {
        return view('cart');
    }

    public function addToCart($id) {
        if(Auth::check()) {
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
        }else {
            return redirect()->back()->with('error', 'Please login to add wine to cart!');
        }
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
    public function search(Request $request)
    {
        $query = $request->input('query');
        $wines = Wine::where('name', 'like', "%{$query}%")->get();
        $wines = Wine::where('country', 'like', "%{$query}%")->get();

        return view('search-results', [
            'wines' => $wines,
            'query' => $query
        ]);
    }



    public function showProductDetails($id)
{
    $wine = Wine::find($id);

    if ($wine) {
        return view('product_details', compact('wine'));
    } else {
        // Handle the case where no wine with the given ID was found
    }
}
}
