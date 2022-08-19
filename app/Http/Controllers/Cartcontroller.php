<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index($id)
    {
        $item = Item::findOrFail($id);
        return view('view', compact('item'));
    }
    public function getAddToCart($id)
    {
        Session::put('item_id',  $id);
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            $item = Item::findOrFail($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($item, $item->id);
            Session::put('cart', $cart);
            return redirect()->route('view', $id);
        }
    }
    public function cart()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            return view('cart', [
                'items' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'totalQty' => $cart->totalQty
            ]);
        }
    }

    public function increaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->increaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('CartController@cart');
    }

    public function decreaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->decreaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('CartController@cart');
    }

    public function removeItem($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->removeItem($id);
        session()->put('cart', $cart);
        return redirect()->action('CartController@cart');
    }

    public function clearCart()
    {
        if (session()->has('cart')) {
            session()->forget('cart');
        }
        return redirect('/');
    }
}
