<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/','Auth\AuthController@postLogin');
Route::get('/registre', 'Auth\AuthController@getRegister');
Route::post('/registre','Auth\AuthController@postRegister');
Route::get('/logout','Auth\AuthController@getLogout');


Route::get('vet','VetController@index');
Route::get('home', 'HomeController@index');

Route::resource('clinica','ClinicaController');
Route::resource('clinica/create','ClinicaController@create');


/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
	return redirect('auth/login');
});
*/