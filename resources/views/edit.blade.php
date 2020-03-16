@extends('dashboard')
@section('content')
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade in show" role="alert">
   <strong>Dato ingresado invalido</strong> <br><br>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
   <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
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
                  <form method="POST" action="{{ route('update', $users->id) }}">
                     @csrf
                     @method('GET')
                     <div class="row">
                        <div class="form-group col-md-3">
                           <div class="card shadow">
                              <strong>Usuario</strong><br>
                              {{ $users->username }}
                              <div class="card shadow py-2" >
                                 <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="{{($users->avatar)}}" style="height: 100px;width: 100px;">
                              </div>
                              <div class="form-group row">
                                 <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>
                                 <div class="col-md-6">
                                    <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="name" autofocus>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
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
                                       <div class="form-group col-lg-6">
                                          <strong>Nombre</strong><br> 
                                          {{ $users->name }} 
                                       </div>
                                       <div class="form-group col-lg-6">
                                          <strong>Apellico</strong><br>
                                          {{ $users->lastname }}
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-lg-6">
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
                           <hr class="my-2">
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-danger float-right">Actualizar</button>
                        <a href="{{ route('crudusers') }}" class="btn btn-lg btn-warning float-left">Volver</a>
                     </div>
                  </form>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

