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
                  <form method="POST" action="{{ route('updateProduct', $products->id) }}" enctype="multipart/form-data">
                     @csrf
                     @method('GET')
                     <div class="row">
                        <div class="form-group col-md-6">
                           <div class="card shadow">
                              <h4 class="text-center" style=" margin-top: 5px;">{{ $products->name }}</h4>
                              <div class="card shadow" >
                                 <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="/img/{{($products->avatar)}}" style="height: 300px;width: 300px;">
                                 <input type="file" name="avatar" id="avatar" class="form-control" value="/img/{{($products->avatar)}}"style="border: none;">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card shadow" style="border:0px;">
                              <div class="card-header bg-white border-0" >
                                 <div class="row align-items-center">
                                    <div class="col-12">
                                       <h3 >Detalle Producto</h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body" >
                                 <div class="row">
                                    <div class="form-group col-lg-6">
                                       <label for="name" class=""><strong>{{ __('Nombre') }}</strong>:<br>{{ ($products->name) }}</label>
                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                       @error('name')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="form-group col-lg-8">
                                       <label for="features" class=""><strong>{{ __('Caracteristicas') }}</strong>:<br>{{ ($products->features) }}</label>
                                       <input id="features" type="text" class="form-control @error('features') is-invalid @enderror" name="features" placeholder="Caracteristicas"value="{{ old('features') }}" required autocomplete="features" autofocus>
                                       @error('features')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-lg-12">
                                       <label for="description" class=""><strong>{{ __('Descripción') }}</strong>:<br>{{ ($products->description) }}</label>
                                       <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Descripción" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                       @error('description')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-lg-5">
                                       <label for="stock" class=""><strong>{{ __('Stock') }}</strong>:<br>{{ ($products->stock) }}</label>
                                       <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" placeholder="Stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>
                                       @error('stock')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                    <div class="form-group col-lg-5">
                                       <label for="price" class=""><strong>{{ __('Precio') }}</strong>:<br>{{ ($products->price) }}</label>
                                       <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Precio" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                       @error('price')
                                       <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr class="my-1">
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" name="add" class="btn btn-lg btn-danger float-right">Actualizar</button>
                        <a href="{{ url('crudproducts') }}" class="btn btn-lg btn-warning float-left">Volver</a>
                     </div>
                  </form>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

