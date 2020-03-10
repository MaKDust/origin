@extends('layouts.app')
@section('AdminNav')
@if ((Auth::user() != null) && (Auth::user()->role == "1"))
            <div>
                <button class="btn btn-primary"><a class="nav-link" href="{{url('/metrics')}}"><i class="fas fa-chart-bar"></i>Metrica</a></button>
                <button class="btn btn-success"><a class="nav-link" href="{{url('/crudproducts')}}"><i class="fas fa-boxes"></i>Produtos</a></button>
                <button class="btn btn-danger"> <a class="nav-link" href="{{url('/crudusers')}}"><i class="fas fa-users"></i>Usuarios</a></button>
            </div>
            @endif

@endsection


{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collsapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href="{{url('/metrics')}}"><i class="fas fa-chart-bar"></i>Metrica</a>
      </li>
      <li class="nav-item">
        <a href="{{url('/crudproducts')}}"><i class="fas fa-boxes"></i>Produtos</a>
      </li>
      <li class="nav-item">
        <a href="{{url('/crudusers')}}"><i class="fas fa-users"></i>Usuarios</a>
      </li>      
    </ul>
  </div>
</nav> --}}
 

 {{--    <div class="col1">

        <div class="sidebar shadow">
            
            <div class="section-top">
                
                <div class="logo ">
                    <img src="{{ Auth::user()->avatar }}" class="img-fluid" >
                </div>

                <div class="user mtop16">
                    <span class="subtitle ">Hola:</span>
                    <div class="name">
                        {{ Auth::user()->name }} {{ Auth::user()->lastName }}
                    </div>
                    <div class="email">
                        {{ Auth::user()->email }}
                    </div>
                </div>

            </div>  

            <div class="mainA">
                <ul>
                    <li>
                        <a href="{{url('/metrics')}}"><i class="fas fa-chart-bar"></i>Metrica</a>
                    </li>
                    <li>
                        <a href="{{url('/crudproducts')}}"><i class="fas fa-boxes"></i>Produtos</a>
                    </li>
                    <li>
                        <a href="{{url('/crudusers')}}"><i class="fas fa-users"></i>Usuarios</a>
                    </li>
                </ul>
            </div>

        </div>

    </div> --}}

    
        
        <div class="page">
            @section('content')
        </div>
  {{--   </div>

</div> --}}

@endsection