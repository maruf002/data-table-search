<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'userController@index')->name('index');
Route::get('namesearch', 'userController@namesearch')->name('namesearch');
Route::get('phonesearch', 'userController@phonesearch')->name('phonesearch');
Route::get('addsearch', 'userController@addsearch')->name('addsearch');