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
Route::get('/place', 'HomeController@getAll');
Route::get('/detailplace/{id}', 'HomeController@getById');

//place
Route::get('/manage', 'PlaceController@index');
Route::get('/add', 'PlaceController@add');
Route::post('/create', 'PlaceController@create');
Route::get('/hapusadmin/{id}', 'PlaceController@hapus');
Route::get('/manageorders', 'PlaceController@manage');
Route::get('/edit/{id}', 'PlaceController@edit');
Route::post('/update/{id}', 'PlaceController@update');
Route::get('/destroy/{id}','PlaceController@destroy');

//order
Route::get('/historypemesanan', 'OrderController@historypemesanan');
Route::get('/cetak/{id}', 'OrderController@cetak');
Route::get('/order', 'OrderController@order');
Route::post('/add', 'OrderController@add');
Route::get('/editorder/{id}', 'OrderController@editorder');
Route::post('/updateorder/{id}', 'OrderController@updateorder');
Route::get('/bukti/{id}', 'OrderController@bukti');
Route::post('/upload/{id}', 'OrderController@upload');
Route::get('/hapus/{id}', 'OrderController@hapus');
