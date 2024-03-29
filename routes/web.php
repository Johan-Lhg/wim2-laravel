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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/salut/{name}', function ($name) {
    return "Salut $name";
});

Route::get('/clients', function () {
 return view('clients.index');
});

Route::get('/clients', 'ClientsController@index');

Route::get('/clients/{client}', 'ClientsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('clients', 'ClientsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
