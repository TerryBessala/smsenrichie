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

Route::get('/', function () {
    return view('grapejs');
});

Route::post('save', 'SaveController@save')->name('save');
Route::post('uploads','SaveController@uploadfile')->name('upload');
Route::post('preview{id}','SaveController@preview')->name('preview');
Route::get('preview/{id}','SaveController@preview')->name('previewget');
Route::get('load','SaveController@load')->name('load');
Route::get('test','SaveController@test')->name('test');

