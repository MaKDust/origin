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
                                                        <strong>Nombre producto</strong><br> 
                                                        <input textarea rows="10" cols="30" type="text" class="form-control" name="name" id="name" placeholder="Nombre Producto">
                                                    </div>
                                                    <div class="form-group col-lg-8">
                                                        <strong>Caracteristicas</strong><br>
                                                        <input type="text" class="form-control" name="features" id="features" placeholder="Caracteristicas">
                                                    </div>
                                            </div>

                                            <div class="row">

                                                    <div class="form-group col-lg-12">
                                                        <strong>Descripcion</strong><br> 
                                                        <input type="text" class="form-control" name="description" id="description" placeholder="Descripcion">
                                                    </div>
                                            </div>

                                                
                                            <div class="row">

                                                    <div class="form-group  col-md-4">
                                                        <strong>Stock</strong><br>
                                                       <input type="number" min="1" class="form-control" name="stock" id="stock">
                                                    </div>

                                                    <div class="form-group  col-md-4">
                                                        <strong>Precio</strong><br>
                                                        <input type="number" class="form-control" name="price" id="price">
                                                    </div>

                                                    <div class="form-group  col-md-4">
                                                        <strong>Oferta</strong><br>
                                                        <input type="number" min="0"class="form-control" name="salePrice" id="salePrice">
                                                    </div>
                                                    <div class="form-group  col-md-8">
                                                        <strong>Imagen</strong><br>
                                                        <input type="file" name="avatar" id="avatar" class="form-control" style="border: none;">  
                                                    </div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr class="my-1">

                                </div>
                                
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