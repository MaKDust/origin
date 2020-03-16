@extends('layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade in show" role="alert">
   <strong>Faltante de Stock</strong> <br><br>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
   <ul>
      <h4>{{$errors->first()}}</h4>
   </ul>
</div>
@endif
<div class="table-table">
   <div>
      <div class="header">
         <i class="fas fa-shopping-cart" style="margin-right: 10px;"></i>
         Carrito de compras
      </div>
   </div>
   <table class="tab" cellspacing="0">
      <tbody>
         <tr class="trs">
            <th class="ths">Nombre</th>
            <th class="ths">Precio</th>
            <th class="ths">Cantidad</th>
            <th class="ths">Opciones</th>
         </tr>
         @foreach ($cartItems as $item)
         <tr class="trs">
            <td class="tds float-left" ><a href="{{ route('Product', $item->id ) }}">{{ $item->name }}</a></td>
            <td class="tds">${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
            <td class="tds">
               <form action="{{ route('updateQuantity', $item->id) }}">
                  @csrf
                  <input name="quantity" type="number" size="2" value="{{ $item->quantity }}">
                  <button class=" btn-xs btn-success"type="submit"><i class="fas fa-sync"></i></button>
               </form>
            </td>
            <td class="tds"><a href="{{ route('destroyItem', $item->id) }}"><i class="far fa-trash-alt" style="color:red;"></i></a></td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <h3 class="float-left">Total a pagar: ${{ Cart::session(auth()->id())->getTotal() }}</h3>
   @if(Cart::session(auth()->id())->getTotal()>0)
   <a href="{{ route('checkout') }}" class="btn btn-xs btn-warning float-right btn-xs">Finalizar compra</a>
   @else
   <a  href="{{ route('welcome') }}" class="btn btn-xs btn-warning float-right btn-xs"><i class="fas fa-arrow-left"> Agrega producto!</i></a> 
   @endif
</div>
@endsection

