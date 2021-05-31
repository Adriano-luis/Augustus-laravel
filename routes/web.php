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
    Route::get('/sobre', 'HomeController@sobre')->name('sobre');

    //Empresas
    Route::get('/cadastrar', 'CadastrarController@index')->name('nova-empresa');
    Route::get('/ver-empresas', 'VerEmpresasController@index')->name('ver-empresas');

    Route::prefix('/forneca-informacoes')->group(function (){
    Route::get('/', 'FornecaInformacoesController@index')->name('forneca-informacoes');
    Route::post('/', 'FornecaInformacoesController@indexPost')->name('indexPost');
    Route::get('/tributacao', 'FornecaInformacoesController@tributacao')->name('tributacao');
    });

    //Noticias
    Route::get('/noticias', 'NoticiaController@index')->name('noticias');
   

    //Oportunidades

    //Usuários
    Route::get('/perfil-usuario', 'PerfilUsuarioController@index')->name('perfil-usuario');
    Route::get('/cadastrar-usuario', 'PerfilUsuarioController@cadastrar')->name('cadastrar-usuario');
    Route::post('/cadastrar-usuario', 'PerfilUsuarioController@salvar')->name('cadastrar-usuario');

    /*
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/sobre', 'HomeController@index');
    Route::get('/termos', 'HomeController@index');
   
    Route::get('/noticia', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    */
});