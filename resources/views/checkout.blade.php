@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <section class="container-fluid perfil">
                        <form method="POST" action="{{ url('storeOrder') }}">
                        @csrf
                        @method('GET')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow" style="border:0px;">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h3 class="text-center">CheckOut - Datos para envio</h3>
                                        </div>
                                    </div>
                                    <div class="card-body" >
                                        <h6 class="heading-small text-muted mb-4">Datos personales</h6>
                                        <div class="pl-lg-1">
                                           <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="">Nombre</label>
                                                    <input type="text" name="shipping_name" id="" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="">Apellido</label>
                                                    <input type="text" name="shipping_lastname" id="" class="form-control" required>                                        
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="">Numero de Celular</label>
                                                    <input type="text" name="shipping_celphone" id="" class="form-control" required>                                            
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Direccion</label>
                                                    <input type="text" name="shipping_address" id="" class="form-control" required> 
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="">Codigo Postal</label>
                                                    <input type="text" name="shipping_zipcode" id="" class="form-control" required> 
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="">Pais</label>
                                                    <input type="text" name="shipping_country" id="" class="form-control" required> 
                                                </div>
                                                    <div class="col-md-2">
                                                    <label for="">Provincia</label>
                                                    <input type="text" name="shipping_state" id="" class="form-control" required> 
                                                </div>
                                                    <div class="col-md-2">
                                                    <label for="">Ciudad</label>
                                                    <input type="text" name="shipping_city" id="" class="form-control" required> 
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <h6 class="heading-small text-muted mb-4">Pagar</h6>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <button type="submit" class="btn btn-lg btn-danger mt-3 float-right">Finalizar</button>
                        
                        </form>
                    </section> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection