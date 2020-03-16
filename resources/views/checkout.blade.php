@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
               
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
                            
                                <div class="card shadow" style="border:0px;">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h3 class="text-center">Datos para envio</h3>
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
                                                    <input type="number" name="shipping_celphone" id="" class="form-control" required>                                            
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
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h3 class="text-center">Datos de pago</h3>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-4 offset-md-4 col-10 offset-1 pl-0 pr-0">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                
                                                                <div class="col-md-7 col-12" style="font-size: 1.7rem;">
                                                                    <i class="fab fa-cc-amex"></i>
                                                                    <i class="fab fa-cc-diners-club"></i>
                                                                    <i class="fab fa-cc-discover"></i>
                                                                    <i class="fab fa-cc-visa"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="validationTooltipCardNumber"><strong>NOMBRE TITULAR</strong></label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control border-right-0">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="validationTooltipCardNumber"><strong>NUMBERO DE TARJETA</strong></label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control border-right-0" id="validationTooltipCardNumber" placeholder="XXXX - XXXX - XXXX - XXXX">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text rounded-right" id="validationTooltipCardNumber"><i class="fa fa-credit-card"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 col-12">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputExpirationDate"><strong>EXPIRATION DATE</strong></label>
                                                                            <input type="text" class="form-control" id="exampleInputExpirationDate" placeholder="MM / YY">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-12">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputCvcCode"><strong>CVC CODE</strong></label>
                                                                            <input type="text" class="form-control" id="exampleInputCvcCode" placeholder="CVC">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <button type="submit" class="btn btn-lg btn-danger mt-3 float-right">Finalizar</button>
                                    </div>

                                </div>
                           

                        </div>
                        
                           
                        
                        </form>
                    </section> 
               
           
        </div>
    </div>
</div>

@endsection