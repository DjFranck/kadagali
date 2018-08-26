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

Route::get('apropos',['as'=>'apropos','uses'=>'AboutController@index']);
Route::get('contact',['as'=>'contact','uses'=>'ContactController@index']);
Route::get('livres',['as'=>'livres','uses'=>'LivreController@index']);
Route::get('service',['as'=>'service','uses'=>'ServiceController@index']);