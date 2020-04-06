<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'features', 'description', 'stock', 'price', 'avatar', 'quantity', 'new', 'sale'
    ];


}
