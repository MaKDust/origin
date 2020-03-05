@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shopping Cart</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     {{-- {{ dd(\Cart::session(auth()->id())->getContent()) }} --}}
                     
                         <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                             <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                               
                               <thead class="thead-dark|thead-light">
                                 <tr>
                                   
                                   <th scope="col">Nombre</th>
                                   <th scope="col">Precio</th>
                                   <th scope="col">Cantidad</th>
                                   <th scope="col">Opciones</th>
                                </tr>
                               </thead>
                               <tbody>
                                @foreach ($cartItems as $item)
                                 <tr>
                                   <th scope="row">{{ $item->name }}</th>
                                    <td>${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                                    <td>
                                        <form action="{{ route('updateQuantity', $item->id) }}">
                                            @csrf
                                            <input name="quantity" type="number" value="{{ $item->quantity }}">
                                            <input type="submit" value="Actualizar">
                                        </form>                                        
                                    </td>

                                    <td><a href="{{ route('destroyItem', $item->id) }}"><i class="far fa-trash-alt" ></i></a></td>   
                                </tr>
                                 @endforeach
                                </tbody>
                             </table>
                             <h3 class="float-left">Total a pagar: ${{ Cart::session(auth()->id())->getTotal() }}</h3>
                            <a href="{{ route('checkout') }}" class="btn btn-lg btn-warning float-right">Finalizar compra</a>
                             
                             <a href=""></a>
                         </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
