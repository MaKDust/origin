@extends('dashboard')

@section('content')

@if($messaje = Session::get('success'))
<div class="alert alert-success alert-dismissible fade in show" role="alert">
    <p>{{ $messaje }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title" style="font-size: 1.5rem;">
                <i class="fas fa-boxes" style="margin-right: 10px;"></i>
                Productos
            </h2>
        </div>

        <div class="inside">
            <div align="right">
                 <a href="{{ route('createProduct') }}" class="btn btn-default">
                 <span class="fa fa-plus-circle">Agregar Producto</span></a>
                </div>
            <table class="table">
                <thead>
                    <tr>
                        <td><strong>Avatar</strong></td>
                        <td><strong>Id</strong></td>                        
                        <td><strong>Nombre</strong></td>
                        <td><strong>Caracteristicas</strong></td>
                        <td><strong>Descripcion</strong></td>
                        <td><strong>Stock</strong></td>
                        <td><strong>Precio</strong></td>
                        <td><strong>Precio Oferta</strong></td>
                        <td><strong>Acciones</strong></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><img src="/img/{{$product->avatar}}" class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block" style="height:40px;width:40px;margin-left:15px;"></td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->features}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->salePrice}}</td>
                        <td>
                            <form action="{{ route('destroyProduct', $product->id) }}" method="post">
                                @method('GET')
                                @csrf
                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt" ></i></button>
                                <a href="{{ route('showProduct', $product->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                                <a href="{{ route('editProduct', $product->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
{{ $products->links() }}
@endsection