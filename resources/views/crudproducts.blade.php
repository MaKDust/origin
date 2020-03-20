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
<div class="table-table">
   <div>
      <div class="header"><i class="fas fa-boxes" style="margin-right: 10px;"></i>Productos</div>
      <div align="right">
         <a href="{{ route('createProduct') }}" class="btn btn-default">
         <span class="fa fa-plus-circle">Agregar Producto</span></a>
      </div>
   </div>
   <table class="tab" cellspacing="0">
      <tbody>
         <tr class="tr">
            <th class="th">Avatar</th>
            <th class="th">Nombre</th>
            <th class="th">Caracteristicas</th>
            <th width="230" class="th">Descripcion</th>
            <th class="th">Stock</th>
            <th class="th">Precio</th>
            <th class="th">Acciones</th>
         </tr>
         @foreach($products as $product)
         <tr class="tr">
            <td class="td"><img src="/img/{{$product->avatar}}" class="imgCrud" /></td>
            <td class="td">{{$product->name}}</td>
            <td class="td">{{str_limit($product->features, 15)}}</td>
            <td class="td">{{str_limit($product->description, 15)}}</td>
            <td class="td">{{$product->stock}}</td>
            <td class="td">{{$product->price}}</td>
            <td class="td">
               <form action="{{ route('destroyProduct', $product->id) }}" method="post">
                  @method('GET')
                  @csrf
                  <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt" ></i></button>
                  <a href="{{ route('showProduct', $product->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                  <a href="{{ route('editProduct', $product->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i></a>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   {{ $products->links() }}
</div>

@endsection

