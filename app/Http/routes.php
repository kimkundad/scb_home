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


    Route::get('admin/add_user','MbitcoinController@add_user');
    Route::get('admin/print','MbitcoinController@coupon');
    Route::post('admin/add_user/2','MbitcoinController@add_user2');

    Route::post('admin/print_coupon','MbitcoinController@print_coupon');

  });

  Route::get('show_user/', 'BitcoineventController@post_back');
  Route::get('show_user/2', 'BitcoineventController@post_back2');
  Route::get('show_user/3', 'BitcoineventController@post_back3');
  Route::get('show_user/4', 'BitcoineventController@post_back4');
  Route::get('show_user/5', 'BitcoineventController@post_back5');
  Route::get('show_user/6', 'BitcoineventController@post_back6');
  Route::get('show_user/7', 'BitcoineventController@post_back7');
  Route::get('show_user/8', 'BitcoineventController@post_back8');
  Route::get('show_user/9', 'BitcoineventController@post_back9');
