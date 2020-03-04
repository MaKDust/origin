@extends('layouts.app')

@section('content')

<div class="album">
        <div class="container">
            <div class="row">
            @foreach ($products as $product)
              <div class="col-lg-3 d-flex align-items-stretch py-3">
                  <div class="card mb-3 box-shadow">
                    <div class="card-header" style="height: 50%;">
                    <img class="card-img-top img-fluid rounded mx-auto d-block" src="img/{{ $product->avatar }}" alt="Card image cap" style="width: 80%; ">
                     </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3>${{ $product->price }}</h3>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a  class="card-link btn btn-sm btn-danger"><i class="fas fa-eye"></i></a>
                          <a  class="card-link btn btn-sm btn-warning"><i class="fas fa-cart-plus"></i></a>
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
{{-- <div class="container text-center">
    
    <div class="row">

        @foreach ($products as $product)
           <div class="col-lg-4 d-flex align-items-stretch py-3">
               <div class="card">
                  <img class="card-img-top align-content-center"  src="img/{{ $product->avatar }}" alt="Card image cap" style="width: 50%;  object-fit: cover;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <h3>${{ $product->price }}</h3>
                  </div>
                  <div class="card-body">
                    <a href="#" class="card-link btn btn-danger"><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
           </div>
           

        @endforeach

        
    </div>
    
</div> --}}
@endsection

{{-- @section('footer')
@extends('footer')
@endsection --}}