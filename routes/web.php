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
Route::get('/fruit/create','ProductController@create'); 
Route::post('/fruit/create','ProductController@store');
Route::get('/fruit','ProductController@index');
Route::get('fruit/edit/{id}','ProductController@edit');
Route::post('fruit/edit/{id}','ProductController@update');
Route::delete('/fruits/{id}','ProductController@destroy');
Route::get('/fruit/show/{id}','ProductController@show');