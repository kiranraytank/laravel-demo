<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function customer() {
        return $this->belongsTo('\App\User');
    }

    public function menu() {
        return $this->belongsTo('\App\Models\Menu');
    }
}
