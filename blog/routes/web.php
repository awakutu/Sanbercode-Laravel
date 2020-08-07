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

Route::get('/master', 'AdminLteController@master');
Route::get('/items', 'AdminLteController@items_index');
Route::get('/create', 'AdminLteController@items_create');
Route::get('/data-tables', 'AdminLteController@data_tables');
Route::get('/', 'AdminLteController@items_index');

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('jawaban/{id}', 'JawabanController@index');
Route::post('jawaban/{id}', 'JawabanController@store');
