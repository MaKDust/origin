@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card" style="margin: 50px 0 50px 0;">
            <div class="card-header">Perfil usuario</div>
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
                           <h4 class="text-center" style=" margin-top: 5px;">{{ Auth::user()->username }}</h4>
                           <div class="card shadow" >
                              <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="{{asset(Auth::user()->avatar)}}" style="height: 100px;width: 100px;">
                           </div>
                        </div>
                        <div class="card shadow">
                           <button type="file" class="btn btn-outline-success">
                           Foto de Perfil
                           </button>
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
                                    <div class="col-lg-8">
                                       <strong>Nombre</strong><br>
                                       {{ Auth::user()->name }}
                                    </div>
                                    <div class="col-lg-4">
                                       <strong>Apellido</strong><br>
                                       {{ Auth::user()->lastname }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-8">
                                       <strong>Email</strong><br>
                                       {{ Auth::user()->email }}
                                    </div>
                                    <div class="col-lg-4">
                                       <strong>N Registro</strong><br>
                                       {{ Auth::user()->id }}
                                    </div>
                                 </div>
                               </div>
                                 <hr class="my-4">
                                 <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                 <form method="POST" action="{{ route('user', Auth::user()->id) }}" enctype="multipart/form-data">
                                  {{csrf_field()}}
                                 <div class="row">
                                   <div class="form-group col-lg-6">
                                      <label for="celphone" class=""><strong>Telefono</strong></label>
                                      <input type="text" class="form-control" name="celphone" placeholder="{{ Auth::user()->celphone }}" value="" required autocomplete="name" autofocus>
                                   </div>
                                   <div class="form-group col-lg-6">
                                      <label for="address" class=""><strong>Domicilio</strong></label>
                                      <input type="text" class="form-control" name="address" placeholder="{{ Auth::user()->address }}" value="" required autocomplete="name" autofocus>
                                   </div>
                                    <div class="form-group col-lg-6"><!-- -->
                                       <label for="city" class=""><strong>Ciudad</strong></label>
                                       <input type="text" class="form-control" name="city" placeholder="{{ Auth::user()->city }}" value="" required autocomplete="name" autofocus>
                                    </div>
                                    <div class="form-group col-lg-6">
                                       <label for="state" class=""><strong>Provincia</strong></label>
                                       <input type="text" class="form-control" name="state" placeholder="{{ Auth::user()->state }}" value="" required autocomplete="name" autofocus>
                                    </div>
                                     <div class="form-group col-lg-6"><!-- -->
                                        <label for="zipcode" class=""><strong>Código Postal</strong></label>
                                        <input type="text" class="form-control" name="zipcode" placeholder="{{ Auth::user()->zipcode }}" value="" required autocomplete="name" autofocus>
                                     </div>
                                     <div class="form-group col-lg-6"><!-- -->
                                        <label for="country" class=""><strong>Pais</strong></label>
                                        <input type="text" class="form-control" name="country" placeholder="{{ Auth::user()->country }}" value="" required autocomplete="name" autofocus>
                                     </div>
                                     <input type="hidden" name="id" class="btn btn-outline-info float-right" value="{{ Auth::user()->id }}">
                                     <input type="submit" name="id" class="btn btn-outline-info float-right" value="Modificar">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-4">
                     </div>
                  </div>
               </section>
            </div>
            </div>
          </div>
   </div>
</div>
@endsection
