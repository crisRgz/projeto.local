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
/*
|--------------------------------------------------------------------------
| Onde buscar cousas
|--------------------------------------------------------------------------
|.env para cambiar variables de configuración/ nome da aplicación
|
*/

Route::get('/', function () {
    return view('bem-vindos'); // Páxina INDEX meter links, crear seccións centrais, e/ou áncoras para ler n1 sóa páxina
});

Auth::Routes();

Route::get('/empregadosList', 'EmpregadoController@index'); // Listado de todos os empregados co id de empresa.

Route::get('/home', 'HomeController@index')->name('home'); // páxina na que entras se fizer loggin
// Rexistrar usuarios segundo o rol, enviar cada un ao contoller correspondente

Route::post('/empregado', 'EmpregadoController@create')->name('empregado');  // metodo create para gardar as novas altas n
Route::get('/empregado/{empregado}', 'EmpregadoController@show');  // metodo show para listar un empregado en concreto
Route::delete('/empregado/{id}/delete', 'EmpregadoController@destroy'); // Metodo para eliminar usuario.
Route::post('/empregado/{empregado}', 'EmpregadoController@formulario'); // EDIT FORM

Route::post('/familiar', 'FamiliarController@create')->name('familiar');	 // no controller do seu rol

Route::post('/empresa', 'EmpresaController@create')->name('empresa');

// Links de home
/*
Route::get('/wwd', 'HomeController@wwd');
Route::get('/wycd', 'HomeController@wycd');
Route::get('/blog', 'HomeController@blog');
Route::get('/help', 'HomeController@help');
Route::get('/news', 'HomeController@news'); */
//Better with views to mantain logged in people.
Route::get('/wwd', function () {
    return view('wwd');
});
Route::get('/wycd', function () {
    return view('wycd');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/help', function () {
    return view('help');
});