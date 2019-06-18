<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function customer() {
    	return $this->belongsTo('\App\User');
    }

    public function order() {
    	return $this->belongsTo('\App\Models\Order');
    }

    public function offer() {
    	return $this->belongsTo('\App\Models\Offer');
    }
}
