<?php
namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ProductsController extends Controller
{
    public function crudproducts()
    {
        $products = Products::latest()->Paginate(6);
        return view('crudproducts', compact('products'));
    }

    public function create()
    {
        //
    }

    public function createProduct()
    {
        return view('createProduct');
    }

    public function store(Request $request)
    {
       $request->validate([
            'name'          =>  'required',
            'features'      =>  'required',
            'description'   =>  'required',
            'stock'         =>  'required|min:1',
            'price'         =>  'required',            
            'avatar'        =>  'required'
        ]);

        $avataruploaded = $request->file('avatar');
        $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
        $avatarpath = public_path('/img/');
        $avataruploaded->move($avatarpath, $avatarname);

        $input_data = array(
            'name'          =>  $request->name,
            'features'      =>  $request->features,
            'description'   =>  $request->description,
            'stock'         =>  $request->stock,
            'price'         =>  $request->price,            
            'avatar'        =>  $avatarname
        );

        Products::create($input_data);

        return redirect('crudproducts')->with('Success', 'Producto creado!');
    }
    
    public function show($id)
    {
        if (Auth::user()->role == 1) {
            $products = Products::findOrFail($id);
            return view('showproduct', compact('products'));
        } else {
            return redirect('/');
        }
    }
 
    public function edit($id)
    {
       {
        if (Auth::user()->role == 1) {
            $products = Products::findOrFail($id);
            return view('editProduct', compact('products'));
        } else {
            return redirect('/');
        }
    }
    }

    public function updateProduct(Request $request, $id)
    {
        if (Auth::user()->role == 1) {
            if(request()->has('avatar')){
            $request->validate([
            'name'          =>  'required',
            'features'      =>  'required',
            'description'   =>  'required',
            'stock'         =>  'required|min:1',
            'price'         =>  'required',            
            'avatar'        =>  'image'
            ]);

            $avataruploaded = $request->file('avatar');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/img/');
            $avataruploaded->move($avatarpath, $avatarname);

            $products = array(
            'name'          =>  $request->name,
            'features'      =>  $request->features,
            'description'   =>  $request->description,
            'stock'         =>  $request->stock,
            'price'         =>  $request->price,
            'new'           =>  $request->new,
            'sale'          =>  $request->sale,            
            'avatar'        =>  $avatarname
            );

            Products::whereId($id)->update($products);
            return redirect()->route('crudproducts')->with('success', 'Producto actualizado!');
        }else{
            $request->validate([
            'name'          =>  'required',
            'features'      =>  'required',
            'description'   =>  'required',
            'stock'         =>  'required|min:1',
            'price'         =>  'required'
        ]);
   
            $products = array(
            'name'          =>  $request->name,
            'features'      =>  $request->features,
            'description'   =>  $request->description,
            'stock'         =>  $request->stock,
            'price'         =>  $request->price,
            'new'           =>  $request->new,
            'sale'          =>  $request->sale
        );

            Products::whereId($id)->update($products);
            return redirect()->route('crudproducts')->with('success', 'Producto actualizado!');
        }
        } else {
            return redirect('/');
        }
    }

    public function destroy($id)
    {
        if (Auth::user()->role == 1) {
            $products = Products::findOrFail($id);
            $products->delete();
            return redirect()->route('crudproducts')->with('success', 'Producto eliminado!');
        } else {
            return redirect('/');
        }
    }

    
}
