<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function menus() {
    	return $this->hasMany('\App\Models\Menu');
    }

    public function getNameAttribute($value = '')
    {
    	// dump($value);
    	return strtoupper($value);
    }
}
