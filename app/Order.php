<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function cart() {
        return $this->hasOne('App\Cart');
    }

    public function transactions() {
        return $this->morphMany('App\Transaction', 'transcationable');
    }
}
