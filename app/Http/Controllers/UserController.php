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
}
