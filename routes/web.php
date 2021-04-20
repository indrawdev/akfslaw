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

Auth::routes(['register' => false]);
// frontend
Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/partner/{slug}', 'FrontendController@partner');
Route::get('/service/{slug}', 'FrontendController@service');
Route::get('/publication', 'FrontendController@publication')->name('publication');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact', 'ContactController@store');

Route::get('/lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// backend
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories/{slug}', 'CategoryController@show');
Route::get('/posts/{slug}', 'PostController@show');
Route::get('/partners', 'PartnerController@index');