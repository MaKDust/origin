<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class GuestController extends Controller
{
    
    
    public function product()
    {
        return view('product');
    }

    public function contact()
    {
        return view('contact');
    }
}
