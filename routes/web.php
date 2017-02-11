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



Route::group(['middleware' => 'web'], function (){

    Route::get('/', function () {
        return view('auth\login');
    });

    Auth::routes();

    Route::get('/estado/listar', 'EstadoController@index');
    Route::get('/estado/novo', 'EstadoController@novo');
    Route::post('/estado/salvar', 'EstadoController@salvar');
    Route::patch('/estado/{estado}', 'EstadoController@atualizar');
    Route::get('/estado/{estado}/editar', 'EstadoController@editar');

    Route::get('/home', 'HomeController@index');

});

