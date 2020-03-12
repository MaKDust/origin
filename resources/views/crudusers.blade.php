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
                    <div class="header"><i class="fas fa-users" style="margin-right: 10px;"></i>
                    Usuarios</div>                    
                </div>
                <table class="tab" cellspacing="0">
                <tbody>
                    <tr class="tru">
                        <th class="thu">Avatar</th>                                           
                        <th class="thu">Nombre</th>
                        <th class="thu">Apellido</th>
                        <th class="thu">Email</th>
                        <th class="thu">Rol</th>
                        <th class="thu">Acciones</th>
                    </tr>
                
                
                    @foreach($users as $user)
                    <tr class="tru">
                        <td class="tdu"><img src="{{$user->avatar}}" class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block imgCrud" style="height:40px;width:40px;margin-left:15px;"></td>
                      
                        <td class="tdu">{{$user->name}}</td>
                        <td class="tdu">{{$user->lastname}}</td>
                        <td class="tdu">{{$user->email}}</td>
                        <td class="tdu">{{$user->role}}</td>
                        <td class="tdu">
                            <form action="{{ route('destroy', $user->id) }}" method="post">
                                @method('GET')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt" ></i></button>
                                <a href="{{ route('show', $user->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
                                <a href="{{ route('edit', $user->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
            
        
    </div>

{{ $users->links() }}
@endsection