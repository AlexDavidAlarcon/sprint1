<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-removeitem', 'CartController@removeitem')->name('cart.removeitem');

Route::get('/productos', 'FrontController@index');

