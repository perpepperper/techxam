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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/task', 'TaskController');
Route::post('/group', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
<<<<<<< HEAD
=======

Route::post('/task', 'ListController@store');
>>>>>>> 7048f5a9213117abc7fc538ece80bf89af2b99c6
