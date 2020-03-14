@extends('layouts.app')

@section('content')

<!--    hero  =   products    -->

<div class="album">
        <div class="container">
            <div class="row">
            @foreach ($products as $product)
            @if($product->stock > 0)
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
                          <a  href="{{ route('addToCart', $product->id ) }}" class="card-link btn btn-sm btn-success"><i class="fas fa-cart-plus"></i></a>
                        </div>
                        <small class="text-muted">Stock: {{ $product->stock }}</small>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
            @endforeach
           </div>
        </div>
      </div>
@endsection
