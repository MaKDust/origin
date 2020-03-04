@extends('layouts.app')

@section('content')

<!--    banner  =   carrousel ads!    -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="https://www.w3schools.com/howto/img_nature_wide.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Lorem ipsum.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium libero blanditiis doloremque impedit consectetur ullam sequi, nihil temporibus assumenda aliquam!</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Lorem</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="https://www.w3schools.com/howto/img_snow_wide.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam culpa beatae aspernatur facere inventore minus ex in veritatis quo tempora.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Lorem</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="https://www.w3schools.com/howto/img_mountains_wide.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Lorem ipsum.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eligendi eum fugit rerum culpa impedit illo numquam ullam provident ea!</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Lorem</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--    hero  =   products    -->

<div class="album">
        <div class="container">
            <div class="row">
            @foreach ($products as $product)
              <div class="col-lg-3 d-flex align-items-stretch py-3">
                  <div class="card mb-3 box-shadow" style="box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .15);">
                    <div class="card-header bg-transparent" style="height: 55%;border:none;">
                    <img class="card-img-top img-fluid rounded mx-auto d-block" src="img/{{ $product->avatar }}" alt="Card image cap" style="width: 80%; ">
                     </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3>${{ $product->price }}</h3>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group" >
                          <a  class="card-link btn btn-sm btn-warning"><i class="fas fa-eye"></i></a>
                          <a  class="card-link btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i></a>
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