<?php

namespace App\Http\Controllers;

use App\Products;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function storeOrder(Request $request)
    {   
        
        $request->validate([
            'shipping_name' => 'required',
            'shipping_lastname' => 'required',
            'shipping_address' => 'required',
            'shipping_celphone' => 'required',
            'shipping_country' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_zipcode' => 'required'
        ]);

        $order = new Order();

        $count = \Cart::session(auth()->id())->getContent()->count();
        if ($count > 0) {

        $order->order_number = uniqid('OrderNumber-');

        $order->grand_total = \Cart::session(auth()->id())->getTotal();

        $order->item_count = \Cart::session(auth()->id())->getContent()->count();
        $order->user_id = auth()->id();

        $order->shipping_name = $request->input('shipping_name');
        $order->shipping_lastname = $request->input('shipping_lastname');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_celphone = $request->input('shipping_celphone');
        $order->shipping_country = $request->input('shipping_country');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        $order->save();

        $cartItems = \Cart::session(auth()->id())->getContent();
        foreach ($cartItems as $item) 
        {
            $order->items()->attach($item->id, ['price'=>$item->price,'quantity'=>$item->quantity]);
            $id = $item->id;
            Products::whereId($id)->decrement('stock', $item['quantity']);
        }
        
        
        \Cart::session(auth()->id())->clear();

        
        return redirect()->route('welcome')->with('message', 'Muchas Gracias por su compra, Sigue buscando lo que necesitas!');

        }

        else{
            return redirect('welcome');
        }
        
    }

    public function showOrder($id){
        $orders = Order::findOrFail($id);        
        $items = Order::with('items')->get();
        dd($orders, $items);
            
    }
}
