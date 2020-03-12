@extends('layouts.app')
@section('AdminNav')
 <hr class="mt-1">
@if ((Auth::user() != null) && (Auth::user()->role == "1"))
            <div class="adminButtons ">
                <button class="btn btn-outline-primary btn-xs"><a class="nav-link" href="{{url('/metrics')}}"><i class="fas fa-chart-bar"></i></a></button>
                <button class="btn btn-outline-primary btn-xs"><a class="nav-link" href="{{url('/crudproducts')}}"><i class="fas fa-boxes"></i></a></button>
                <button class="btn btn-outline-primary btn-xs"> <a class="nav-link" href="{{url('/crudusers')}}"><i class="fas fa-users"></i></a></button>
            </div>
            @endif
@endsection
<div class="page">
    @section('content')
</div>

