<?php

namespace App\Http\Controllers;
use App\Products;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products = Products::oldest()->Paginate(8);

        return view('welcome', compact('products'));
    }


    public function Product($id){

        $products = Products::findOrFail($id);
        return view('product', compact('products'));
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
    public function edit(Request $formulario, $id)
    {
      $user=User::find($id);

      $user->celphone=$formulario["celphone"];
      $user->address= $formulario["address"]; //Direccion
      $user->city= $formulario["city"];     //Ciudad
      $user->state= $formulario["state"];  // Provincia
      $user->zipcode= $formulario["zipcode"];  // Cod Postal
      $user->country= $formulario["country"];

      $user->update();

      return redirect('user');

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
