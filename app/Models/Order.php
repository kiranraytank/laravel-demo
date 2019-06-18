<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function customer() {
    	return $this->belongsTo('\App\User');
    }

    public function orderDetails() {
    	return $this->hasMany('\App\Models\OrderDetail');
    }

    public function payment() {
        return $this->hasOne('\App\Models\Payment');
    }
}
