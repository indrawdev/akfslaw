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


Route::group(['prefix' => '{locale}'], function() {
    
    Auth::routes(['register' => false]);

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/categories/{slug}', 'CategoryController@show');
    Route::get('/posts/{slug}', 'PostController@show');
    Route::get('/partners', 'PartnerController@index');
    Route::get('/partners/{slug}', 'PartnerController@show');

});