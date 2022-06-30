<?php

use App\Http\Controllers\ComicsController;
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

Route::get('/', 'ComicsController@index')->name('home');
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
Route::get('/comics/edit/{id}', 'ComicsController@edit')->name('comics.edit');
Route::put('/comics/update/{id}', 'ComicsController@update')->name('comics.update');
Route::post('/comics/store', 'ComicsController@store')->name('comics.store');
Route::delete('/comics/delete', 'ComicsController@destroy')->name('comics.delete');
Route::get('/comics/{slug}', 'ComicsController@show')->name('comics.show');
