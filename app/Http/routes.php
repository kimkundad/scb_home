<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('send');
});



Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

  Route::resource('admin/bitcoin', 'MbitcoinController');

    Route::post('admin/bitcoin_sender','MbitcoinController@update_user');
    Route::get('admin/dashboard', 'DashboardController@index');
    Route::get('admin/searchbitcoin', 'MbitcoinController@searchbitcoin');

    Route::get('api/get_chart', 'MbitcoinController@get_chart');

    Route::get('admin/print/{id}', 'MbitcoinController@print');

    Route::post('admin/store_user','MbitcoinController@store_user');


    Route::get('admin/add_user/', function () {
        return view('admin.bitcoin.add_user');
    });

  });
