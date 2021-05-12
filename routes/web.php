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

Route::get('/login', 'LoginController@index');



Route::prefix('')->group(function (){
    Route::get('/home', 'HomeController@index');
    /*
    Route::get('/cadastrar', 'HomeController@index');
    Route::get('/cadastrar', 'HomeController@index');
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/perfil-usuario', 'HomeController@index');
    Route::get('/ver-empresas', 'HomeController@index');
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