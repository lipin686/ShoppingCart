<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
class Order extends Model
{
    protected $fillable=['user_id'];

    public function items(){
        return $this->belongsToMany(Item::class)->withTimestamps()->withPivot('qty');
    }

    public function getSumAttribute(){
        $orderItems=$this->items;
        $sum=0;
        foreach ($orderItems as $item) {
            $sum += ($item->price * $item->pivot->qty);
        }
        return $sum;
    }
}
