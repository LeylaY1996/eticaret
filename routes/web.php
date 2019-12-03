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

Route::group(['namespace'=>'backoffice','prefix'=>'backoffice','as'=>'backoffice.'],function() {

    Route::get('/anasayfa','DashboardController@index')->name('anasayfa');
    Route::get('/hakkimizda','AboutusController@aboutus')->name('aboutus');
    Route::get('/tarihce','HistoryController@history')->name('history');
    Route::get('/politika','PolicyController@policy')->name('policy');
    Route::get('/sss','FaqController@faq')->name('faq');
    Route::get('/ürün','ProductController@product')->name('product');
});











Route::group(['namespace'=>'frontend','prefix'=>'frontend','as'=>'frontend'], function(){
    Route::get('/anasayfa','DashboardController@index')->name('anasayfa');
});