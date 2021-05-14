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

Route::get('/login/{erro?}', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@autenticar')->name('login');



Route::middleware('login')->prefix('')->group(function (){
    //Geral
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/sair', 'LoginController@sair')->name('logout');

    //Empresas
    Route::get('/cadastrar', 'CadastrarController@index')->name('nova-empresa');
    Route::get('/ver-empresas', 'VerEmpresasController@index')->name('ver-empresas');


    //Noticias

    //Oportunidades

    /*
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/perfil-usuario', 'HomeController@index');
    Route::get('/sobre', 'HomeController@index');
    Route::get('/termos', 'HomeController@index');
    Route::get('/noticias', 'HomeController@index');
    Route::get('/noticia', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    */
});