<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function artworks()
    {
        return $this->belongsToMany(Artworks::class, 'orders')->withPivot('quantity');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart');
    }
}
