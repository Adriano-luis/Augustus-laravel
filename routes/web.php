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

Route::get('/cadastrar-usuario', 'PerfilUsuarioController@cadastrar')->name('cadastrar-usuario');
Route::post('/cadastrar-usuario', 'PerfilUsuarioController@salvar')->name('cadastrar-usuario');



Route::middleware('login')->prefix('')->group(function (){
    //Geral
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/sair', 'LoginController@sair')->name('logout');
    Route::get('/sobre', 'HomeController@sobre')->name('sobre');

    //Empresas
    Route::get('/cadastrar', 'CadastrarController@index')->name('nova-empresa');
    Route::post('/cadastrar', 'CadastrarController@salvar')->name('nova-empresa');
    Route::get('/ver-empresas', 'VerEmpresasController@index')->name('ver-empresas');

    Route::prefix('/forneca-informacoes')->group(function (){
    Route::get('/', 'FornecaInformacoesController@index')->name('forneca-informacoes');
    Route::post('/', 'FornecaInformacoesController@indexPost')->name('indexPost');
    Route::get('/tributacao', 'FornecaInformacoesController@tributacao')->name('tributacao');
    Route::post('/tributacao', 'FornecaInformacoesController@tributacaoPost')->name('tributacao');
    Route::get('/numero-de-funcionarios', 'FornecaInformacoesController@numeroDeFuncionarios')->name('numero-de-funcionarios');
    Route::post('/numero-de-funcionarios', 'FornecaInformacoesController@numeroDeFuncionariosPost')->name('numero-de-funcionarios');
    Route::get('/previdencia', 'FornecaInformacoesController@previdencia')->name('previdencia');
    Route::post('/previdencia', 'FornecaInformacoesController@previdenciaPost')->name('previdencia');
    Route::get('/comercio-exterior', 'FornecaInformacoesController@comercioExterior')->name('comercio-exterior');
    Route::post('/comercio-exterior', 'FornecaInformacoesController@comercioExteriorPost')->name('comercio-exterior');
    Route::get('/relacionamento', 'FornecaInformacoesController@relacionamento')->name('relacionamento');
    Route::post('/relacionamento', 'FornecaInformacoesController@relacionamentoPost')->name('relacionamento');
    Route::get('/outros', 'FornecaInformacoesController@outros')->name('outros');
    Route::post('/outros', 'FornecaInformacoesController@outrosPost')->name('outros');
    
    });

    //Noticias
    Route::get('/noticias', 'NoticiaController@index')->name('noticias');
    Route::get('/noticia', 'NoticiaController@single')->name('noticia');
   

    //Oportunidades

    //Usuários
    Route::get('/perfil-usuario', 'PerfilUsuarioController@index')->name('perfil-usuario');

    /*
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/sobre', 'HomeController@index');
    Route::get('/termos', 'HomeController@index');
   
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    */
});