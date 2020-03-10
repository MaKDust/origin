<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use App\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function add($id) 
    
    { 
     	$products = Products::findOrFail($id);
     	
		\Cart::session(auth()->id())->add(
			array(
			    'id' => $products->id,
			    'name' => $products->name,
			    'price' => $products->price,
			    'avatar' => $products->avatar,
			    'quantity' => 1,
			    'attributes' => array(),
			    'associatedModel' => $products
			)
		);

        //dd($products);
		return back();
    }

    public function shoppingcart()
    
    {
    	$cartItems = \Cart::session(auth()->id())->getContent();

    	return view('shoppingcart', compact('cartItems'));
    }

    public function destroyItem($itemId)
    
    {
    	\Cart::session(auth()->id())->remove($itemId);

    	return back();
    }

    public function updateQuantity($rowId)
    
    {
    	\Cart::session(auth()->id())->update($rowId, [
    		'quantity' =>	[
    			'relative'	=> false, 
    			'value'		=> request('quantity')
    		]
    	]);

    	return back();
    }

    public function checkout()

    {

    	return view('checkout');

    }
}
