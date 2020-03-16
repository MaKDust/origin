@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="panel shadow">
      <div class="header">
         <h2 class="title">
            <i class="fas fa-users" style="margin-right: 10px;"></i>
            Usuarios
         </h2>
      </div>
      <div class="inside">
         <table class="table">
            <thead>
               <tr>
                  <td><strong>Avatar</strong></td>
                  <td><strong>Id</strong></td>
                  <td><strong>Nombre</strong></td>
                  <td><strong>Apellido</strong></td>
                  <td><strong>Email</strong></td>
                  <td><strong>Rol</strong></td>
                  <td></td>
               </tr>
            </thead>
            <tbody>
               @foreach($users as $user)
               <tr>
                  <td><img src="{{$user->avatar}}" class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block" style="height:40px;width:40px;margin-left:15px;"></td>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->lastname}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role}}</td>
                  <td>
                     <div class="opts">
                        <a class="edit" href="{{ route('updateRole', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Editar">
                        <i class="fas fa-edit"></i>
                        </a>
                        <a class="delete" href="" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                     </div>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection

