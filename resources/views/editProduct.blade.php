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
                                                <div class="col-8">
                                                    <h3 class="mb-0 ">Detalle Producto</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body" >

                                            <div class="row">
                                <!--                   <div class="form-group col-lg-6">
                                                        <strong>Nombre producto</strong><br>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{ $products->name }}">

                                                    </div>-->
                                                    <div class="form-group col-lg-6">
                                                       <label for="name" class="">{{ __('Nombre') }}</label>
                                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                       @error('name')
                                                       <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                       @enderror
                                                    </div> <!--
                                                    <div class="form-group col-lg-8">
                                                        <strong>Caracteristicas</strong><br>
                                                        <input type="text" name="features" id="features" class="form-control" value="{{ $products->features }}">

                                                    </div> -->
                                                    <div class="form-group col-lg-8">
                                                       <label for="features" class="">{{ __('Caracteristicas') }}</label>
                                                       <input id="features" type="text" class="form-control @error('features') is-invalid @enderror" name="features" value="{{ old('features') }}" required autocomplete="features" autofocus>
                                                       @error('features')
                                                       <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                       @enderror
                                                    </div>
                                            </div>

                                            <div class="row"> <!--
                                                    <div class="form-group col-lg-12">
                                                        <strong>Descripcion</strong><br>
                                                        <input type="text" name="description" id="description" class="form-control" value="{{ $products->description }}">


                                                    </div>-->
                                                    <div class="form-group col-lg-12">
                                                       <label for="description" class="">{{ __('Descripción') }}</label>
                                                       <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                                       @error('description')
                                                       <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                       @enderror
                                                    </div>
                                            </div>


                                            <div class="row">
                                                    <!--
                                                    <div class="form-group  col-md-4">
                                                        <strong>Stock</strong><br>
                                                        <input type="number" name="stock" id="stock" class="form-control" value="{{ $products->stock }}">

                                                    </div> -->
                                                    <div class="form-group col-lg-4">
                                                       <label for="stock" class="">{{ __('Stock') }}</label>
                                                       <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>
                                                       @error('stock')
                                                       <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                       @enderror
                                                    </div>
                                                    <!--
                                                    <div class="form-group  col-md-4">
                                                        <strong>Precio</strong><br>
                                                        <input type="number" name="price" id="price" class="form-control" value="{{ $products->price }}">

                                                    </div>  -->
                                                    <div class="form-group col-lg-4">
                                                       <label for="price" class="">{{ __('Precio') }}</label>
                                                       <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                                       @error('price')
                                                       <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                       @enderror
                                                    </div>
                                                    <!--
                                                    <div class="form-group  col-md-4">
                                                        <strong>Oferta</strong><br>
                                                        <input type="number" name="salePrice" id="salePrice" class="form-control" value="{{ $products->salePrice }}">

                                                    </div>   -->
                                                    <div class="form-group col-lg-4">
                                                       <label for="salePrice" class="">{{ __('Oferta') }}</label>
                                                       <input id="salePrice" type="number" class="form-control @error('salePrice') is-invalid @enderror" name="salePrice" value="{{ old('salePrice') }}" required autocomplete="salePrice" autofocus>
                                                       @error('salePrice')
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
