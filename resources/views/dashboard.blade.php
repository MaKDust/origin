@extends('layouts.app')

@section('content')
<nav></nav>
<div class="wrapper wrapperA">
    <div class="col1">

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

    </div>

    <div class="col2">
        
        <div class="page">
            @section('content')
        </div>
    </div>

</div>

@endsection