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
                            <form action="{{ route('destroy', $user->id) }}" method="post">
                                @method('GET')
                                @csrf
                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt" ></i></button>
                                <a href="{{ route('show', $user->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                                <a href="{{ route('edit', $user->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
{{ $users->links() }}
@endsection