<?php

namespace App\Services;

use App\Models\Item;
use Mockery\Undefined;

/**
 * Class InspiringService
 */
class ShowProfileService
{
    /**
     * @return string
     */
    public function showProfile()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }
    public function Search($keyword)
    {
        $items = Item::Where('title', 'like', "%" . $keyword . "%")->get();
        
        return view('search', compact('items'));
    }
    public function SearchBackIndex()
    {
        return redirect()->route('indexpage');
    }
}
