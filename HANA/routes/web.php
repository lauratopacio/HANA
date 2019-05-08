<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('lomasvendido', 'Frontend\PagesController@lomasvendido');
Route::get('contactanos', 'Frontend\PagesController@contactanos');
Route::get('visita_por_primera_vez', 'Frontend\PagesController@visitaprimeravez');



Route::get('catalogo_cumpleanos', 'Frontend\CatalogoController@catalogo_cumpleanos');
Route::get('catalogo_compromisos_bodas', 'Frontend\CatalogoController@catalogo_compromisos_bodas');
Route::get('catalogo_enamorados', 'Frontend\CatalogoController@catalogo_enamorados');
Route::get('catalogo_kid_zone', 'Frontend\CatalogoController@catalogo_kid_zone');
Route::get('catalogo_gracias', 'Frontend\CatalogoController@catalogo_gracias');
Route::get('catalogo_lo_siento', 'Frontend\CatalogoController@catalogo_lo_siento');
Route::get('catalogo_maternidad', 'Frontend\CatalogoController@catalogo_maternidad');
Route::get('catalogo_por_que_no', 'Frontend\CatalogoController@catalogo_por_que_no');
Route::get('catalogo_graduaciones', 'Frontend\CatalogoController@catalogo_graduaciones');
Route::get('catalogo_nacimientos', 'Frontend\CatalogoController@catalogo_nacimientos');
Route::get('catalogo_aniversario', 'Frontend\CatalogoController@catalogo_aniversario');
Route::get('catalogo_aniversario', 'Frontend\CatalogoController@catalogo_aniversario');
Route::get('catalogo_mejorate', 'Frontend\CatalogoController@catalogo_mejorate');
Route::get('arreglos_temporada', 'Frontend\CatalogoController@arreglos_temporada');
Route::get('paquetes', 'Frontend\GlobosController@paquetes');
Route::get('comprarahora', 'Frontend\ComprarController@comprar');
Route::get('detalles', 'Frontend\ProductoController@detalles');

Route::get('globos_cumpleanos', 'Frontend\GlobosController@globos_cumpleanos');
Route::get('globos_mejorate', 'Frontend\GlobosController@globos_mejorate');
Route::get('globos_nacimientos', 'Frontend\GlobosController@globos_nacimientos');
Route::get('globos_kids_zone', 'Frontend\GlobosController@globos_kids_zone');
Route::get('globos_enamorados', 'Frontend\GlobosController@globos_enamorados');
Route::get('globos_graduaciones', 'Frontend\GlobosController@globos_graduaciones');
Route::get('globos_letras_numeros', 'Frontend\GlobosController@globos_letras_numeros');
Route::get('paquetescompletos', 'Frontend\GlobosController@paquetescompletos');

	Route::resource('cuenta', 'Frontend\UserController');
	Route::resource('carrito_compras','Frontend\CarritoController');
	Route::resource('index', 'Frontend\PagesController');
	Route::resource('catalogo', 'Frontend\CatalogoController');
	Route::resource('globos', 'Frontend\GlobosController');
	Route::resource('favoritos', 'Frontend\FavoriteController');

	Route::resource('producto', 'Frontend\ProductoController');

	Route::resource('users', 'Admin\UserController');
	Route::resource('carrito', 'Admin\CarritoController');
	Route::resource('carritoproducto', 'Admin\CarritoproductoController');
	Route::resource('category', 'Admin\CategoryController');
	Route::resource('deseable', 'Admin\DeseableController');
	Route::resource('direccion', 'Admin\DirectionController');
	Route::resource('productocategoria', 'Admin\ProductoCategoriaController');
	Route::resource('products', 'Admin\ProductController');
	Route::resource('roles', 'Admin\RolesController')->except('show', 'create');
	Route::resource('permissions', 'Admin\PermissionsController')->except('show', 'create');
	
	Route::resource('catalogo_arreglos', 'Frontend\CatalogoController')->except('show');
	Route::resource('carritocompras', 'Frontend\CarritoController');


	




