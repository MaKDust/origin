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
     	if ($products->stock >= 1){
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
		return back();
		}else
		return "no hat stock";
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
    	$cartItems = \Cart::session(auth()->id())->getContent();
    	foreach ($cartItems as $items){$id = $items->id;}
    	$id = $items->id;
    	$products = Products::findOrFail($id);
    	$stock = $products->stock;
    	$quantity = request('quantity');
    	if( $stock >= $quantity ){
    		\Cart::session(auth()->id())->update($rowId, [
    		'quantity' =>	[
    			'relative'	=> false,
    			'value'		=> request('quantity')
    		]
    	]);

    	return back();

    	}else{
    		return back()->withErrors('Revise cantidad seleccionada del producto: '. $items->name);
    	}    	
    	
    }

    public function checkout()

    {

    	return view('checkout');

    }
}
