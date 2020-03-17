<?php

namespace App;
use App\Products;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {

    	return $this->belongsToMany(Products::class, 'order_items','order_id','product_id')->withPivot('quantity','price');
    }
}
