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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/matricula', 'EnrollmentController@home');

// con restricciones con expresion regular
Route::get('/usuarios/{nombre?}', function ($name='Estar'){
    return 'hola ' . $name;
})->where('nombre', '[a-zA-Z]+');
*/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
