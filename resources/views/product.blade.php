@extends('layouts.app')
@section('content')
<hr class="mt-2">
<div class="search-container container">
   <a  href="{{ route('addToCart', $products->id ) }}" class="card-link btn btn-sm btn-success float-right"><i class="fas fa-cart-plus"> Agregar al carrito</i></a> 
   <a  href="{{ URL::previous() }}" class="card-link btn btn-sm btn-warning"><i class="fas fa-arrow-left"> Volver</i></a> 
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
            @endif
            <section class="container-fluid perfil">
               <div class="row">
                  <div class="col-md-6">
                     <div class="card shadow">
                        <h4 class="text-center" style=" margin-top: 5px;">{{ $products->name }}</h4>
                        <div class="card shadow" >
                           <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="/img/{{($products->avatar)}}" style="height: 300px;width: 300px;">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="card shadow" style="border:0px;">
                        <div class="card-header bg-white border-0" >
                           <div class="row align-items-center">
                              <h3 class="mb-0 text-center">Detalle Producto</h3>
                           </div>
                        </div>
                        <div class="card-body" >
                           <div class="row">
                              <div class="form-group col-lg-6">
                                 <strong>Nombre producto</strong><br> 
                                 {{ $products->name }}
                              </div>
                              <div class="form-group col-lg-8">
                                 <strong>Caracteristicas</strong><br>
                                 {{ $products->features }}
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-lg-12">
                                 <strong>Descripcion</strong><br> 
                                 {{ $products->description }}
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group  col-md-4">
                                 <strong>Stock</strong><br>
                                 {{ $products->stock }}
                              </div>
                              <div class="form-group  col-md-4">
                                 <strong>Precio</strong><br>
                                 {{ $products->price }}
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr class="my-1">
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</div>
@endsection