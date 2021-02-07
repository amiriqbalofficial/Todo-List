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


Route::get('/',function(){
    return view('welcome');

});
Route::get('/home','TodosController@index')->name('home');
Route::get('create','TodosController@create')->name('create');
Route::get('edit','TodosController@edit')->name('edit');

Route::resource('todos','TodosController');
