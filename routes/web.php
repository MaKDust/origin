<?php
/*
|--------------------------------------------------------------------------
| Web Routes -Rutas web de navegacion libre
|--------------------------------------------------------------------------
*/
Route::redirect('/','/welcome');
Route::get('/welcome', 'HomeController@index')->name('welcome'); 
Route::get('/product', 'GuestController@product')->name('product'); 
Route::get('/contact', 'GuestController@contact')->name('contact');
Route::get('/search', 'HomeController@search')->name('search');	

/*
|--------------------------------------------------------------------------
| Auth Routes - Rutas web para usuarios logueados
|--------------------------------------------------------------------------
*/

Auth::routes();
Route::get('/user', 'HomeController@userProfile')->name('user')->middleware('auth');


Route::get('/shoppingcart', 'CartController@shoppingcart')->name('shoppingcart')->middleware('auth'); 
Route::get('/addToCart/{id}', 'CartController@add')->name('addToCart')->middleware('auth');
Route::get('/destroyItem/{id}', 'CartController@destroyItem')->name('destroyItem')->middleware('auth');
Route::get('/updateQuantity/{id}', 'CartController@updateQuantity')->name('updateQuantity')->middleware('auth');
Route::get('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth'); 

Route::get('/storeOrder', 'OrderController@storeOrder')->name('storeOrder')->middleware('auth');
//Route::resource('orders', 'OrderController')->middleware('auth'); 



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







