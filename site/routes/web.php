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

Route::get('/teste', 'PagesController@teste');

Route::get('/loja', 'PagesController@loja')->name('loja');

Route::get('/loja/{id}', 'PagesController@shopItem');

Route::resource('/admin/produtos', 'ProdutosController');

Route::resource('/admin/imagens', 'ImagensController');

Route::post('/enviar', 'ContatoController@enviaContato');

Auth::routes();

Route::get('/admin', 'AdminController@admin')->name('admin')->middleware('auth');

Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho')->middleware('auth');

Route::get('/carrinho/adicionar', function () {
    return redirect()->back('index');
})->middleware('auth');

Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');

Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');

Route::get('/produtos', 'ProdutosController@getProdutos');