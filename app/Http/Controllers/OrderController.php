<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        if(!$request->has('billing_name'))
        {
            $order->billing_name = $request->input('shipping_name');
            $order->billing_lastname = $request->input('shipping_lastname');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_celphone = $request->input('shipping_celphone');
            $order->billing_country = $request->input('shipping_country');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }
        else
        {
            $order->billing_name = $request->input('billing_name');
            $order->billing_lastname = $request->input('billing_lastname');
            $order->billing_address = $request->input('billing_address');
            $order->billing_celphone = $request->input('billing_celphone');
            $order->billing_country = $request->input('billing_country');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }

        $order->save();

        $cartItems = \Cart::session(auth()->id())->getContent();
        foreach ($cartItems as $item) 
        {
            $order->items()->attach($item->id, ['price'=>$item->price,'quantity'=>$item->quantity]);
        }
        
        //shoppingCar empy
        \Cart::session(auth()->id())->clear();

        //dd('orden creada',$order);
        return "orden completa, valla a pagar a /payment PAGINA PAGAR";

        //paiment ('/payment', PaymentController@payment);

        // if ('payment') {
        //     $order  = Order::find($order_id);
        //     $order->is_paid = 1;
        //      $order->status = success;
        //     $order->save();
        

        //    \Cart::session(auth()->id())->clear();
        //     return "gracias por su compra, envia mail de agradecimiento vuelve al home o lleva a su pagina de compras "MIS COMPRAS";
        // }
        }

        else{
            return redirect('welcome');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
