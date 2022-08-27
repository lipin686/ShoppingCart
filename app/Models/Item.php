<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Item extends Model
{
    protected $fillable = [
        'title', 'pic', 'price','totle',
    ];
    public function orders(){
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}
