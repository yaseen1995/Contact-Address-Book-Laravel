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


Route::get('/', 'addressController@home');

Route::get('/create', function() {

  return view('create');

});

Route::post('/insert', 'addressController@add');
Route::get('/update/{id}', 'addressController@update');
Route::post('/edit/{id}', 'addressController@edit');
Route::get('/read/{id}', 'addressController@read');
Route::get('/delete/{id}', 'addressController@delete');
