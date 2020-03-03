<?php
/*
|--------------------------------------------------------------------------
| Web Routes -Rutas web de navegacion libre
|--------------------------------------------------------------------------
*/

Route::get('/', 'GuestController@welcome')->name('/'); // Perfil del usuario
Route::get('/product', 'GuestController@product')->name('product'); // Detalle Producto
Route::get('/contact', 'GuestController@contact')->name('contact'); // Paguina de contactos

/*
|--------------------------------------------------------------------------
| Auth Routes - Rutas web para usuarios logueados
|--------------------------------------------------------------------------
*/

Auth::routes();
Route::get('/user', 'HomeController@userProfile')->name('user'); // Perfil del usuario
Route::get('/shoppingcart', 'HomeController@shoppingcart')->name('shoppingcart'); // Shoppingcart
Route::get('/checkout', 'HomeController@checkout')->name('checkout'); // Checkout

/*
|--------------------------------------------------------------------------
| Admin Routes -Rutas del usuario con privilegio de administrador
|--------------------------------------------------------------------------
*/

 
Route::get('/dashboard','AdminController@index')->name('dashboard');
	
	Route::get('/metrics', 'AdminController@metrics')->name('metrics');
	
	Route::get('/crudusers','AdminController@crudusers')->name('crudusers');
	
		Route::get('/store','ProductsController@store')->name('store');
		Route::get('/show/{id}','AdminController@show')->name('show');
		Route::get('/edit/{id}','AdminController@edit')->name('edit');
		Route::get('/update/{id}','AdminController@update')->name('update');
		Route::get('/destroy/{id}','AdminController@destroy')->name('destroy');

	Route::get('/crudproducts','ProductsController@crudproducts')->name('crudproducts');
	
		Route::get('/createProduct','ProductsController@createProduct')->name('createProduct');
		Route::get('/showProduct/{id}','ProductsController@show')->name('showProduct');
		Route::get('/editProduct/{id}','ProductsController@edit')->name('editProduct');
		Route::get('/updateProduct/{id}','ProductsController@updateProduct')->name('updateProduct');
		Route::get('/destroyProduct/{id}','ProductsController@destroy')->name('destroyProduct');







