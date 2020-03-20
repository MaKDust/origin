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
                                    <div class="col-lg-6">
                                       <strong>Nombre</strong><br> 
                                       {{ Auth::user()->name }}
                                    </div>
                                    <div class="col-lg-6">
                                       <strong>Apellico</strong><br> 
                                       {{ Auth::user()->lastname }}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <strong>Email</strong><br> 
                                       {{ Auth::user()->email }}
                                    </div>
                                 </div>
                                 <hr class="my-4">
                                 <!-- Direccion -->
                                 <a href="#!" class="btn btn-outline-info float-right">Modificar</a>
                                 <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                 <div class="row">
                                    <div class="col-md-3">
                                       <strong>Direccion</strong><br> 
                                    </div>
                                    <div class="col-md-3">
                                       <strong>Ciudad</strong><br>
                                    </div>
                                    <div class="col-md-3">
                                       <strong>Pais</strong><br>
                                    </div>
                                    <div class="col-md-3">
                                       <strong>Pais</strong><br>
                                    </div>
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