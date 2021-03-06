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

Route::get('/', 'StartController@index');
Route::get('books', 'StartController@books');
Route::get('booksw', 'StartController@booksw');
Route::get('categories', 'StartController@categories');
//middleware прослойкак между запрос другими словами межзапросом, функция проверки между запросом
Route::get('/admin', 'AdminController@index')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
