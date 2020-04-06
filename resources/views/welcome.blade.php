@extends('layouts.app')
@section('content')
@if($messaje = Session::get('message'))
<div class="alert alert-success alert-dismissible fade in show" role="alert">
   <p>{{ $messaje }}</p>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
</div>
@endif

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href=""></a><img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap4/chicago.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap4/ny.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<hr>
<!-- Container -->
<div class="container">
  <div class="row" >
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
      <i class="fas fa-shipping-fast"></i>
      <h4>Envio Gratis!</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
      <i class="fas fa-truck"></i>
      <h4>Devolucion Gratis!</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
      <i class="fas fa-dollar-sign"></i>
      <h4>Precios Bajos!</h4>
    </div>
  </div>
</div>
<hr>
<hr>
<h2 class="text-center">PRODUCTOS RECOMENDADOS</h2>
<br>
<div class="album">
   <div class="container">
      <div class="row" >
         @foreach ($products as $product)
         <div class="col-lg-3 d-flex py-3 justify-content-center">
            <div class="card mb-3 box-shadow" style="box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .15);">
               <div class="card-header bg-transparent align-items-center" style="height: 55%;border:none;">
               
                



                  <div class="labels">
                     @if($product->new == 1)
                    <div class="label-new bg-success text-white text-center py-1">Nuevo</div>
                    @endif
                     @if($product->sale == 1)
                    <div class="label-sale bg-primary text-white text-center py-1">Oferta</div>
                    @endif
                  </div>



                  <a href="{{ route('Product', $product->id ) }}"><img class="card-img-top img-fluid rounded mx-auto d-block" src="img/{{ $product->avatar }}" alt="Card image cap" style="width: 80%; "></a>    
               </div>
               <div class="card-body">
                  <h5 class="card-title">{{ ($product->name) }}</h5>
                  <p class="card-text">{{ ($product->description) }}</p>
                  <h3 class="text-center">${{ $product->price }}</h3>
                  <br>
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="col-12 btn-group mr-2 align-bottom " >
                        <a href="{{ route('Product', $product->id ) }}" class="card-link btn btn-sm btn-warning align-bottom"><i class="fas fa-eye"></i> Ver</a>
                        @if($product->stock > 0)
                        <a href="{{ route('addToCart', $product->id ) }}" class="card-link btn btn-sm btn-success align-bottom pull-right"><i class="fas fa-cart-plus"></i> Agregar</a>
                        @endif
                     </div>                     
                  </div>
                  <br>
                  <small class="text-muted align-bottom float-right">Stock: {{ $product->stock }}</small>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<div class="pagination">
  {{ $products->links() }} 
</div>


@endsection

