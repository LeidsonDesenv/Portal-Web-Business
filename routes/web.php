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

Route::get('cadastro', function(){
    return view('cad');})->name('cadastrar');    

Route::get('showcustomers', 'Ctrl\CustomerController@show')->name('showcustomers');
Route::post('addcustomernew','Ctrl\CustomerController@addnew')->name('addcustomers');

