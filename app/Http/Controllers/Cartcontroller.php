<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class Cartcontroller extends Controller
{
    public function index($id)
    {
        $item = Item::findOrFail($id);

        return view('view', compact('item'));
    }
    public function getAddToCart($id)
    {
        if(Auth::guest()){
            return redirect()->route('login');
        }else{
            return redirect()->route('view', $id);
        }
        
    }
}
