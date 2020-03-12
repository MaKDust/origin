@extends('layouts.app')

@section('content')

    <div class="table-table">
                <div>
                    <div class="header"><i class="fas fa-shopping-cart" style="margin-right: 10px;"></i>
                    Carrito de compras</div>                    
                </div>



                         <table class="tab" cellspacing="0">
                            <tbody>
                                 <tr class="trs">
                                   <th class="ths">avatar</th>
                                   <th class="ths">Nombre</th>
                                   <th class="ths">Precio</th>
                                   <th class="ths">Cantidad</th>
                                   <th class="ths">Opciones</th>
                                </tr>
                             
                                @foreach ($cartItems as $item)
                                 <tr class="trs">
                                    <td class="tds"><img src="/img/{{ $item->avatar }}" class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block imgCrud" style="height:40px;width:40px;margin-left:15px;"></td>

                                    <td class="tds" ><a href="{{ route('Product', $item->id ) }}">{{ $item->name }}</a></td>

                                    <td class="tds">${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>

                                    <td class="tds">
                                        <form action="{{ route('updateQuantity', $item->id) }}">
                                            @csrf
                                            <input name="quantity" type="number" value="{{ $item->quantity }}">
                                            <input type="submit" value="Actualizar">
                                        </form>                                        
                                    </td>

                                    <td class="tds"><a href="{{ route('destroyItem', $item->id) }}"><i class="far fa-trash-alt"></i></a></td>   
                                </tr>
                                 @endforeach
                                </tbody>
                             </table>
                                <h3 class="float-left">Total a pagar: ${{ Cart::session(auth()->id())->getTotal() }}</h3>
                                <a href="{{ route('checkout') }}" class="btn btn-lg btn-warning float-right btn-xs">Finalizar compra</a>
                             
                             
                         </div>
                     
               
            </div>
   
   

@endsection
