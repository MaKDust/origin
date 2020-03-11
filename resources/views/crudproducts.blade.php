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

             <div class="table-users">
                <div>
                    <div class="header"><i class="fas fa-boxes" style="margin-right: 10px;"></i>Productos</div>
                    <div align="right">
                         <a href="{{ route('createProduct') }}" class="btn btn-default">
                         <span class="fa fa-plus-circle">Agregar Producto</span></a>
                    </div>
                </div>
                <table class="tab" cellspacing="0">
                    <tbody>
                    <tr>
                        <th>Avatar</th>
                        <th>Id</th>                        
                        <th>Nombre</th>
                        <th>Caracteristicas</th>
                        <th width="230">Descripcion</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Precio Oferta</th>
                        <th>Acciones</th>
                    </tr>
                
                
                    @foreach($products as $product)
                    <tr>
                        <td><img src="/img/{{$product->avatar}}" class="imgCrud" /></td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{str_limit($product->features, 15)}}</td>
                        <td>{{str_limit($product->description, 15)}}</td>
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
 
{{ $products->links() }}
@endsection