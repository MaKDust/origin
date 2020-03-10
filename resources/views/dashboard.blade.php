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

    
        
        <div class="page">
            @section('content')
        </div>


@endsection