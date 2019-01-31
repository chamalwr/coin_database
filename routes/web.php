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

Route::get('/about', [
    'uses' => 'pagesController@about'
]);

Route::get('/lastprice', [
    'uses' => 'lastPriceController@lastprice'
]);

Route::get('/viewLastPrice', [
    'uses' => 'lastPriceController@viewLastPrice'
]);

Route::get('/trade_history', [
    'uses' => 'transactionHistoryController@tradehistory'
]);

Route::get('/viewTradeHistory', [
    'uses' => 'transactionHistoryController@viewTradeHistory'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{provider}/auth', [
    'uses' => 'SocialLoginController@auth',
    'as' => 'social.auth'
]);


Route::get('{provider}/redirect', [
    'uses' => 'SocialLoginController@auth_callback',
    'auth' => 'social.callback'
]);
