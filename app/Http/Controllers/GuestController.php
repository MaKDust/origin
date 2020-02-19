<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcome()
    {
        return view('welcome');
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
