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
    return view('home');
});

Auth::routes();

Route::get('/place', 'PlaceController@getAll');
Route::get('/manage', 'PlaceController@index');
Route::get('/add', 'PlaceController@add');
Route::post('/create', 'PlaceController@create');

Route::get('/order', 'OrderController@order');
Route::post('/add', 'OrderController@add');
Route::get('/editorder/{id}', 'OrderController@editorder');
Route::post('/updateorder/{id}', 'OrderController@updateorder');
Route::get('/hapus/{id}', 'OrderController@hapus');
Route::get('/manageorders', 'OrderController@manage');

Route::get('/wisata/{id}', 'PlaceController@getByDetail');
Route::get('/edit/{id}', 'PlaceController@edit');
Route::post('/update/{id}', 'PlaceController@update');
Route::get('/destroy/{id}','PlaceController@destroy');

Route::get('/booking', 'BookingController@index');
Route::get('/cetak/{id}', 'OrderController@cetak');