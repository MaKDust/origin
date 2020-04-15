@extends('dashboard')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="card">
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
               <section class="container-fluid perfil">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="card shadow">
                           <h5 class="text-center" style=" margin-top: 5px;">Foto de Perfil</h5>
                           <div class="card shadow" >
                              <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="/img/{{ $usuario->avatar }}" style=" height:200px ;width: 200px;">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="card shadow" style="border:1px;">
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
                                       {{ $usuario->name }}
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Apellido</strong><br>
                                       {{ $usuario->lastname }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <strong>Email</strong><br>
                                       {{ $usuario->email }}
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Telefono:</strong><br>
                                       {{ $usuario->celphone }}
                                    </div>
                                 </div>
                                 <hr class="my-4">
                                 <!-- Direccion -->
                                 <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <strong>Direccion</strong><br>
                                       {{ $usuario->address }}
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Codigo Postal</strong><br>
                                       {{ $usuario->zipcode }}
                                    </div>
                                 </div><br>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <strong>Provincia</strong><br>
                                       {{ $usuario->state }}
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Ciudad</strong><br>
                                       {{ $usuario->city }}
                                    </div>
                                  </div><br>
                                    <div class="row">
                                      <div class="col-lg-6">
                                         <strong>Pais</strong><br>
                                         {{ $usuario->country }}
                                      </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-4">
                     </div>
                  </div>
                  <div>
                    <a href="{{ route('editform',$usuario->id) }}" class="btn btn-lg btn-warning float-right">Editar</a>
                    <a href="/welcome" class="btn btn-lg btn-warning float-left">Volver</a>
                  </div> {{--  {{ route('crudusers') }}  --}}
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
