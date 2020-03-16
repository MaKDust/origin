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
<div class="album">
   <div class="container">
      <div class="row">
         @foreach ($products as $product)
         <div class="col-lg-3 d-flex align-items-stretch py-3">
            <div class="card mb-3 box-shadow" style="box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .15);">
               <div class="card-header bg-transparent" style="height: 55%;border:none;">
                  <a href="{{ route('Product', $product->id ) }}"><img class="card-img-top img-fluid rounded mx-auto d-block" src="img/{{ $product->avatar }}" alt="Card image cap" style="width: 80%; "></a>    
               </div>
               <div class="card-body">
                  <h5 class="card-title">{{ ($product->name) }}</h5>
                  <p class="card-text">{{ ($product->description) }}</p>
                  <h3>${{ $product->price }}</h3>
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group" >
                        <a  href="{{ route('Product', $product->id ) }}" class="card-link btn btn-sm btn-warning"><i class="fas fa-eye"></i></a>
                        @if($product->stock > 0)
                        <a  href="{{ route('addToCart', $product->id ) }}" class="card-link btn btn-sm btn-success"><i class="fas fa-cart-plus"></i></a>
                        @endif
                     </div>
                     <small class="text-muted">Stock: {{ $product->stock }}</small>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection

