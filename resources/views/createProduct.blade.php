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
      <div class="col-md-10">
         <div class="card">
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
               <section class="container-fluid perfil">
                  <form id="create" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                     @csrf
                     @method('GET')
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card shadow" style="border:0px;">
                              <div class="card-header bg-white border-0" >
                                 <div class="row align-items-center">
                                    <div class="col-8">
                                       <h3 class="mb-0 ">Crear Producto</h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body" >
                                 <div class="row">
                                    <div class="form-group col-lg-6">
                                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                       @error('name')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="form-group col-lg-6">
                                       <label for="features" class="col-md-4 col-form-label text-md-right">{{ __('Caracteristicas') }}</label>
                                       <input id="features" type="text" class="form-control @error('features') is-invalid @enderror" name="features" value="{{ old('features') }}" required autocomplete="features" autofocus>
                                       @error('features')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-lg-6">
                                       <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                                       <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                       @error('description')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-lg-6">
                                       <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>
                                       <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>
                                       @error('stock')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="form-group col-lg-6">
                                       <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                                       <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                       @error('price')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    
                                    <div class="form-group  col-md-8">
                                       <strong>Imagen</strong><br>
                                       <input type="file" name="avatar" id="avatar" class="form-control" style="border: none;">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-1">
                     </div>
                     <div class="form-group">
                        <button type="submit" name="add" class="btn btn-lg btn-danger float-right">Crear Producto</button>
                        <a href="{{ route('crudproducts') }}" class="btn btn-lg btn-warning float-left">Volver</a>
                      </div>
                    </form>
            </section>
         </div> 
      </div>   
   </div>
</div>
</div>
@endsection
