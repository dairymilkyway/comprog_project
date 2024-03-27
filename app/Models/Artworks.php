<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artworks extends Model
{
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_artwork')->withPivot('quantity');
    }
}
