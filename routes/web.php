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
// altro modo di definire le rotte
// il PRIMO contact è riferito all'url, il SECONDO è riferito al file
Route::view('contact', 'contact');

Route::get('customers', 'CustomerController@List');

// post route in order to add items. will send to > CustomerController@store
Route::post('customers', 'CustomerController@store');