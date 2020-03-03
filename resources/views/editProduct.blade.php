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
                                                    <div class="form-group col-lg-6">
                                                        <strong>Nombre producto</strong><br>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{ $products->name }}"> 
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-8">
                                                        <strong>Caracteristicas</strong><br>
                                                        <input type="text" name="features" id="features" class="form-control" value="{{ $products->features }}"> 
                                                        
                                                    </div>
                                            </div>

                                            <div class="row">

                                                    <div class="form-group col-lg-12">
                                                        <strong>Descripcion</strong><br>
                                                        <input type="text" name="description" id="description" class="form-control" value="{{ $products->description }}">  
                                                        
                                                        
                                                    </div>
                                            </div>

                                                
                                            <div class="row">

                                                    <div class="form-group  col-md-4">
                                                        <strong>Stock</strong><br>
                                                        <input type="number" name="stock" id="stock" class="form-control" value="{{ $products->stock }}"> 
                                                       
                                                    </div>

                                                    <div class="form-group  col-md-4">
                                                        <strong>Precio</strong><br>
                                                        <input type="number" name="price" id="price" class="form-control" value="{{ $products->price }}"> 
                                                       
                                                    </div>

                                                    <div class="form-group  col-md-4">
                                                        <strong>Oferta</strong><br>
                                                        <input type="number" name="salePrice" id="salePrice" class="form-control" value="{{ $products->salePrice }}"> 
                                                        
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