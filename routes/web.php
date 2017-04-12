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

Route::resource('motor', 'MotorsCtrl');

Route::get('/revenue/create/{id}', 'RevenueController@Create');

Route::post('/revenue/create/{id}', 'RevenueController@store');

Route::get('/revenue/view/{id}', 'RevenueController@view');

Route::get('/revenue/show', 'RevenueController@shown');

Route::get('/revenue/filter', 'RevenueController@filte');

Route::post('/revenue/filter', 'RevenueController@filter');

Route::get('/revenue/defaulters', 'RevenueController@defaulter');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/motorbike/deregister', 'MotorsCtrl@deregister');
