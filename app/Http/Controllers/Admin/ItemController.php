<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    
    public function index()
    {
        $items = Item::all();
        return view('admin.item', compact('items'));
    }
    public function store(Request $request)
    {
         Item::create([
            'title' => $request->input('modal-input-title'),
            'pic' => $request->input('modal-input-pic'),
            'price' => $request->input('modal-input-price'),
            'totle' => $request->input('modal-input-totle'),
        ]);
        return redirect()->route('items.index');
    }
    public function create()
    {
        
    }
    public function show()
    {
        
    }
    public function update(Request $request)
    {
        
        $user = Item::find($request->input('modal-edit-id'));
        $user->title = $request->input('modal-edit-title');
        $user->pic = $request->input('modal-edit-pic');
        $user->price = $request->input('modal-edit-price');
        $user->totle = $request->input('modal-edit-totle');
        $user->save();
        return redirect()->route('items.index');
    }
    public function destroy($id)
    {
        Item::find($id)->delete();
        //return redirect()->route('users.index');
    }
    public function edit()
    {
        
    }
}
