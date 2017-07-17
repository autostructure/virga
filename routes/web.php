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
    return view('main');
});

Route::get('/', 'PagesController@index');
Route::get('/survey', 'PagesController@survey');
Route::get('/blade', 'PagesController@blade');

// Route::get('main', function(){
// 	return view('main');
// });

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
