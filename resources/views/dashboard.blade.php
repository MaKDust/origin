@extends('layouts.app')
@section('AdminNav')
<hr class="mt-1">
@if ((Auth::user() != null) && (Auth::user()->role == "1"))
<div class="adminButtons ">
   <button class="btn btn-outline-primary btn-xs" data-toggle="tooltip" data-placement="down" title="Ventas"><a class="nav-link" href="{{url('/sales')}}"><i class="fas fa-file-invoice-dollar"></i></a></button>
   <button class="btn btn-outline-primary btn-xs" data-toggle="tooltip" data-placement="down" title="Productos"><a class="nav-link" href="{{url('/crudproducts')}}"><i class="fas fa-boxes"></i></a></button>
   <button class="btn btn-outline-primary btn-xs" data-toggle="tooltip" data-placement="down" title="Ventas"> <a class="nav-link" href="{{url('/crudusers')}}"><i class="fas fa-users"></i></a></button>
</div>
@endif
@endsection
<div class="page">
   @section('content')
</div>