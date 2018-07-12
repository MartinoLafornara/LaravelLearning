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


Route::get('pass_array', 'TestController@pass_array');
Route::get('pass_variable', 'TestController@pass_variable');

Route::get('route_diretta', function(){
  return 'Route Funzionante';
});

//Route Articles
Route::get('articles','ArticlesController@index');
Route::get('articles/{id}','ArticlesController@show');
