<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function metrics(){
        
        if (Auth::user()->role == 1){
        	return view('metrics');
        }else{
            return redirect('/');
        }
   	}

   	public function products(){
        
        if (Auth::user()->role == 1){
        	return view('products');
        }else{
            return redirect('/');
        }
   	}

   	public function users(){
        
        if (Auth::user()->role == 1){
        	return view('users');
        }else{
            return redirect('/');
        }
   	}

   	

}
