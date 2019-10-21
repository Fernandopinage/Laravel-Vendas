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

Route::get('/', function () {
    return view('welcome');
});


//rota de login index

route::get('/', 'geralController@login');
//rota de validação login
route::POST('validandologin','geralController@validandologin');
//////////////////////////////////////////////////////////////////////


//rota home
route::get('home', 'geralController@home');
//////////////////////////////////////////////////////////////////////


//rota usuario
route::get('usurio','geralController@usuario');
//adiciona usuario
route::post('adcionarUsuario','geralController@adu_suario');
//remover usuario
route::get('delete/{id}','geralController@removerUsuario');


//////////////////////////////////////////////////////////////////////


//rota produto
route::get('produto','geralController@produto');
//rota adiciona produto 
route::post("adicinarProduto" ,'geralController@adc_produto');
//removendo produto
route::get('deletaProduto/{id}','geralController@removendoProduto');