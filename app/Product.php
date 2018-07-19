<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function cart() {
        return $this->belongsToMany('App\Cart')->withPivot('quantity');
    }

    public function orderproduct() {
        return $this->hasMany('App\OrderProduct');
    }

    
}
