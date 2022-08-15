<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Cart;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders', compact('orders'));
    }
    public function new()
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        return view('order',[
            'items'=> $cart->items,
            'totalPrice'=> $cart->totalPrice,
            'totalQty'=>$cart->totalQty]);
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $cart = session()->get('cart');
        
        $order = Order::create([
            'user_id' => Auth::id(),
            'name' => request('name'),
            'phone' => request('phone'),
            'address' => request('address'),
            'cart' => serialize($cart),
            'comment' => "",
            ]);
    }
}
