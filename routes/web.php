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
    return view('bem-vindos'); // INDEX 
});

Auth::Routes();

Route::get('/employees_List', 'EmployeeController@index'); // List all employees 

Route::get('/home', 'HomeController@index')->name('home'); // after login
// Register users by rol, send them to contoller

Route::post('/employee', 'EmployeeController@create')->name('employee');  // create new employee
Route::get('/employee/{id}', 'EmployeeController@show');  // list 1 employee
Route::get('/employee/{id}/edit', 'EmployeeController@edit');// edit 1 employee
Route::post('/employee/{id}/edit', 'EmployeeController@update');// edit 1 employee
Route::get('/employee/{id}/delete', 'EmployeeController@destroy'); //delete 1 employee
Route::get('/employee/{id}/treatments', 'TreatmentController@index');  // list all treatments for this employee

/*
 */
Route::post('/patient', 'PatientController@create')->name('patient');	 //create 1 patient


// Links in home
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