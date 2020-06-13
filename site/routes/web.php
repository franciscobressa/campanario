<?php

use Illuminate\Support\Facades\Route;

// Rotas desnecessárias
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/user', 'UserController@index')->name('user');

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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/loja', 'PagesController@loja');

Route::get('/loja/{id}', 'PagesController@shopItem');

Route::resource('/admin/produtos', 'ProdutosController');

Route::post('/enviar', 'ContatoController@enviaContato');

Auth::routes();

Route::get('/admin', 'AdminController@admin')->name('admin')->middleware('auth');



