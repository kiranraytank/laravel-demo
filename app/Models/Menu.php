<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function category() {
    	return $this->belongsTo('\App\Models\Category');
    }

    public function carts() {
    	return $this->hasMany('\App\Models\Cart');
    }

    public function orderDetails() {
    	return $this->hasMany('\App\Models\OrderDetail');
    }
}
