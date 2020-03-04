<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class GuestController extends Controller
{
    public function welcome()
    {
        $products = Products::take(20)->get();
        return view('welcome', ['products' => $products]);
    }
    
    public function product()
    {
        return view('product');
    }

    public function contact()
    {
        return view('contact');
    }
}
