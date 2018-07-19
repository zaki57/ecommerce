<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function user() {
        return $this->belongsto('App\User');
    }

    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function products() {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
