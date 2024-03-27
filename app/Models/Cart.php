<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function artworks()
    {
        return $this->belongsToMany(Artworks::class, 'cart')->withPivot('quantity');
    }
}
