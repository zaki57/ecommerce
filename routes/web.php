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

Route::get('about', function () {
    $name = 'zmf';
    $age = 31;

    return view('about', compact('name', 'age'));
});

Route::get('/db', function() { 

    $tasks = DB::table('users')->get();

    return view('db',compact('tasks'));
});

Route::get('/products', 'ProductsController@index');

Route::get('/products/{id}', 'ProductsController@show');

Route::post('/cartadd/{id}', 'CartController@store');

Route::get('/cartshow', 'CartController@index');

