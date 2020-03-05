@extends('dashboard')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="container-fluid perfil">
                        
                        <div class="row">

                            <div class="col-md-3"> 

                                <div class="card shadow">
                                    <h4 class="text-center" style=" margin-top: 5px;">{{ $users->username }}</h4> 
                                    <div class="card shadow" >
                                        <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="{{($users->avatar)}}" style="height: 100px;width: 100px;">
                                    </div>
                                    <h4 class="text-center" style=" margin-top: 5px;">{{ ($users->role === 1)?"Admin":"Guess" }}</h4> 
                                </div>

                            </div>

                            <div class="col-md-9">

                                <div class="card shadow" style="border:0px;">

                                    <div class="card-header bg-white border-0" >
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0 ">Perfil</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" >

                                        <h6 class="heading-small text-muted mb-4">Datos personales</h6>
                                        
                                        <div class="pl-lg-4">
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <strong>Nombre</strong><br> 
                                                    {{ $users->name }}
                                                </div>
                                                <div class="col-lg-6">
                                                    <strong>Apellico</strong><br> 
                                                    {{ $users->lastname }}
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <strong>Email</strong><br> 
                                                    {{ $users->email }}
                                                </div>

                                            </div>

                                            <hr class="my-4">
                                            <!-- Direccion -->
                                            
                                            <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <strong>Direccion</strong><br>
                                                     {{ $users->address }}
                                                </div>

                                                <div class="col-md-6">
                                                    <strong>Codigo Postal</strong><br>
                                                    {{ $users->zipcode }}
                                                </div>

                                            </div>
                                            <hr class="my-4">
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <strong>Provincia</strong><br>
                                                    {{ $users->state }}
                                                </div>
                                                <div class="col-md-3">
                                                    <strong>Ciudad</strong><br>
                                                    {{ $users->city }}
                                                </div>
                                                <div class="col-md-3">
                                                    <strong>Pais</strong><br>
                                                    {{ $users->county }}
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <hr class="my-4">

                            </div>

                        </div>

                        <div>
                            <a href="{{ route('crudusers') }}" class="btn btn-lg btn-warning float-right">Volver</a>
                        </div>

                    </section> 

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
