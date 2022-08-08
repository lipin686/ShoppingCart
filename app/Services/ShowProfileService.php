<?php

namespace App\Services;
use App\Models\Item;
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
        $items=Item::all();
        return view('index',compact('items'));
    }
}