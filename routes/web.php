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

Route::group(['middleware' => 'guest:web'], function() {
    Route::view('/', 'welcome');
});

Auth::routes();

Route::resource('book', 'BookController');
Route::get('home', 'HomeController@index')->name('home');
