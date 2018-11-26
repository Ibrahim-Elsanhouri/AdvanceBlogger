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



Route::get('/', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Auth'] , function(){
    Route::get('/register', 'RegisterController@getRegister')->name('register'); 
    Route::post('/register', 'RegisterController@postRegister')->name('register'); 
    
    Route::get('/login', 'LoginController@getLogin')->name('login'); 
    Route::post('/login', 'LoginController@postLogin')->name('login'); 
    Route::post('/logout', 'LoginController@logout')->name('logout'); 

    });

