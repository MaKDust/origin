<?php
namespace App\Http\Controllers;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller 
{    
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        if (Auth::user()->role == 1) {
            $users = User::all();
            return view('dashboard', compact('users'));
        } else {
            return redirect('/');
        }
    }

    public function crudusers() 
    {
        if (Auth::user()->role == 1) {
            $users = User::latest()->Paginate(6);
            return view('crudusers', compact('users'));
        } else {
            return redirect('/');
        }
    }

    public function show($id) 
    {
        if (Auth::user()->role == 1) {
            $users = User::findOrFail($id);
            return view('show', compact('users'));
        } else {
            return redirect('/');
        }
    }

    public function sales() 
    {
        if (Auth::user()->role == 1) {
            $orders = Order::latest()->Paginate(6);
            return view('metrics', compact('orders'));
        } else {
            return redirect('/');
        }
    }
    
    public function edit($id) 
    {
        if (Auth::user()->role == 1) {
            $users = User::findOrFail($id);
            return view('edit', compact('users'));
        } else {
            return redirect('/');
        }
    }

    public function update(Request $request, $id) 
    {
        if (Auth::user()->role == 1) {
            $request->validate(['role' => ['required', 'integer', 'max:1'], ]);
            $users = array('role' => $request->role,);
            User::whereId($id)->update($users);
            return redirect()->route('crudusers')->with('success', 'Roll actualizado!');
        } else {
            return redirect('/');
        }
    }

    public function destroy($id) 
    {
        if (Auth::user()->role == 1) {
            $users = User::findOrFail($id);
            $users->delete();
            return redirect()->route('dashboard')->with('success', 'Usuario eliminado!');
        } else {
            return redirect('/');
        }
    }
}