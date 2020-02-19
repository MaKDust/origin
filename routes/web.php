<?php
/*
|--------------------------------------------------------------------------
| Web Routes -Rutas web de navegacion libre
|--------------------------------------------------------------------------
*/

Route::get('/', 'GuestController@welcome'); // Perfil del usuario
Route::get('/product', 'GuestController@product'); // Detalle Producto
Route::get('/contact', 'GuestController@contact'); // Paguina de contactos

/*
|--------------------------------------------------------------------------
| Auth Routes - Rutas web para usuarios logueados
|--------------------------------------------------------------------------
*/

Auth::routes();
Route::get('/user', 'HomeController@userProfile'); // Perfil del usuario
Route::get('/shoppingcart', 'HomeController@shoppingcart'); // Shoppingcart
Route::get('/checkout', 'HomeController@checkout'); // Checkout

/*
|--------------------------------------------------------------------------
| Admin Routes -Rutas del usuario con privilegio de administrador
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'AdminController@metrics');  // Metrica
Route::get('/products', 'AdminController@products');  // ABM Productos
Route::get('/users', 'AdminController@users');  // ABM Usuarios

