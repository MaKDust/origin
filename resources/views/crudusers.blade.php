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
                    <div class="header"><i class="fas fa-users" style="margin-right: 10px;"></i>
                    Usuarios</div>
                    
                </div>
                <table class="tab" cellspacing="0">
                <tbody>
                    <tr>
                        <td>>Avatar</td>
                        <td>>Id</td>                        
                        <td>>Nombre</td>
                        <td>>Apellido</td>
                        <td>>Email</td>
                        <td>>Rol</td>
                        <td></td>
                    </tr>
                
                
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

{{ $users->links() }}
@endsection