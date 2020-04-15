<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function userProfile()
  {
    $usuario = Auth::User();
    return view('profile',compact('usuario'));
  }
  public function editform($id)
  {
    $usuario = User::find($id);
    return view('editform',compact("usuario"));

  }
  
  public function updateUser(Request $formulario, $id)
  {
  $formulario->validate([
    'name'          =>  'string|min:3',
    'email'        =>  'email',
    'lastname'      =>  'string|min:3',
    'address'   =>  'string|min:3',
    'celphone'         =>  'integer|min:6',
    'city'         =>  'string|min:3',
    'state'        =>  'string|min:3',
    'country'        =>  'string|min:3',
    'zipcode'        =>  'integer',
    'avatar'        =>  'image'
]);

    $avataruploaded = $formulario->file('avatar');
    $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
    $avatarpath = public_path('/img/');
    $avataruploaded->move($avatarpath, $avatarname);


    $users= array(
        'name'          =>  $formulario->name,
        'email'        =>   $formulario->email,
        'lastname'      =>   $formulario->lastname,
        'address'   =>   $formulario->address,
        'celphone'         =>   $formulario->celphone,
        'city'         =>   $formulario->city,
        'state'        =>   $formulario->state,
        'country'        =>  $formulario->country,
        'zipcode'        =>   $formulario->zipcode,
        'avatar'        =>   $avatarname

    );

    User::whereId($id)->update($users);
            return redirect()->route('user')->with('success', 'Usuario actualizado!');

   
  }
}
