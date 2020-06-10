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

Route::get('/', 'PagesController@index');

Route::get('/loja', 'PagesController@loja');

Route::get('/admin', 'PagesController@admin');

Route::resource('/admin/produtos', 'ProdutosController');

Route::post('/enviar', 'ContatoController@enviaContato');

Auth::routes();

Route::get('/login', 'HomeController@index')->name('home');


