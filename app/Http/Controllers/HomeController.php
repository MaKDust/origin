<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products = Products::take(8)->get();

        return view('welcome', compact('products'));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userProfile()
    {
        return view('profile');
    }

    public function shoppingcart()
    {
        return view('shoppingcart');
    }

    public function checkout()
    {
        return view('checkout');
    }

   
}
