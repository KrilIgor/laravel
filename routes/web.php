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

Route::get('/', ['uses' => 'HomeController@index', 'middleware' => ['auth:web']]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('user','UserController');

Route::resource('notes','NotesController');


Route::get('imageUpload', ['uses'=>'ImageUploadController@imageUpload']);
Route::post('imageUpload', ['as'=>'imageUpload','uses'=>'ImageUploadController@imageUploadPost']);

