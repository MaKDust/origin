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
                 <form method="POST" action="" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="card shadow">
                           <h4 class="text-center" style=" margin-top: 5px;">{{ $usuario->username }}</h4>
                           <div class="card shadow" >
                              <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="/img/{{($usuario->avatar)}}" style="height: 100px;width: 100px;">
                              <input type="file" name="avatar" id="avatar" class="form-control" style="border: none;">
                           </div>
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
                                       <strong>Nombre: </strong>{{ $usuario->name }}<br>
                                       <input type="text" name="title" value="{{ $usuario->name }}">
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Apellido: </strong>{{ $usuario->lastname }}<br>
                                       <input type="text" name="title" value="{{ $usuario->lastname }}">
                                    </div>
                                 </div><br>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <strong>Email: </strong>{{ $usuario->email }}<br>
                                       <input type="text" name="email" value="{{ $usuario->email }}">
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Telefono: </strong>{{ $usuario->celphone }}<br>
                                       <input type="text" name="celphone" value="{{ $usuario->celphone }}">
                                    </div>
                                 </div>
                                 <hr class="my-4">
                                 <!-- Direccion -->
                                 <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <strong>Direccion: </strong>{{ $usuario->address }}<br>

                                       <input type="text" name="address" value="{{ $usuario->address }}">
                                    </div>
                                    <div class="col-md-6">
                                       <strong>Codigo Postal: </strong>{{ $usuario->zipcode }}<br>

                                       <input type="text" name="zipcode" value="{{ $usuario->zipcode }}">
                                    </div>
                                 </div>
                                 <hr class="my-4">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <strong>Provincia: </strong>{{ $usuario->state }}<br>
                                       <input type="text" name="state" value="{{ $usuario->state }}">
                                    </div>
                                    <div class="col-md-6">
                                       <strong>Ciudad: </strong>{{ $usuario->city }}<br>

                                       <input type="text" name="city" value="{{ $usuario->city }}">
                                    </div>
                                </div><br>
                                    <div class="row">
                                      <div class="col-md-3">
                                         <strong>Pais: </strong>{{ $usuario->country }}<br>
                                         <input type="text" name="country" value="{{ $usuario->country}}">
                                      </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-4">
                     </div>
                  </div>
                  <div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-lg btn-danger float-right">Actualizar</button>
                    </div>
                     <a href="/user" class="btn btn-lg btn-warning float-left">Volver</a>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
