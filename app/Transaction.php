<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
   /* public function order() {
        return $this->belongsTo('App\Order');
    }

    public function orderproducts() {
        return $this->belongsTo('App\OrderProducts');
    } */

    public function transactionable() {
        return $this->morphTo();
    }
}
