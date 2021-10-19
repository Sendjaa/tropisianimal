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
// route home
Route::get('/', 'blogController@welcome');

Route::get('/tentang', 'blogController@tentang');
Route::get('/galery', 'blogController@galery');
Route::get('/berita', 'blogController@berita');
Route::get('/kontak', 'blogController@kontak');

// crud
Route::get('/home', 'UserController@index');

Route::resource('posts', PostController::class);