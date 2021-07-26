<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContatoMensagemMail;
use App\User;

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

//Login
Route::get('/login/{erro?}', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@autenticar')->name('login');

//Painel
Route::get('/login-painel', 'PainelLoginController@index')->name('login-painel');
Route::post('/login-painel', 'PainelLoginController@autenticar')->name('login-painel');

Route::get('/cadastrar-usuario', 'PerfilUsuarioController@cadastrar')->name('cadastrar-usuario');
Route::post('/cadastrar-usuario', 'PerfilUsuarioController@salvar')->name('cadastrar-usuario');



Route::middleware('login')->prefix('')->group(function (){
    //Geral
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/sair', 'LoginController@sair')->name('logout');
    Route::get('/sobre', 'HomeController@sobre')->name('sobre');
    Route::post('/editar', 'HomeController@editar')->name('editar');
    Route::post('/excluir', 'HomeController@excluir')->name('excluir');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/dashboard-ajax', 'HomeController@dashboardPop')->name('pop');

    //Empresas
    Route::get('/cadastrar', 'CadastrarController@index')->name('nova-empresa');
    Route::post('/cadastrar', 'CadastrarController@salvar')->name('nova-empresa');
    Route::get('/ver-empresas', 'VerEmpresasController@index')->name('ver-empresas');
    Route::get('/empresa-visualizar', 'VerEmpresasController@visualizar')->name('visualizar');
    Route::get('/empresa-relatorios', 'VerEmpresasController@relatorios')->name('relatorios');

    //Perguntas e Respostas
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
    Route::get('/oportunidades', 'OportunidadesController@index')->name('oportunidades');
    Route::post('/oportunidades', 'OportunidadesController@indexPost')->name('oportunidades');
    Route::post('/oportunidades', 'OportunidadesController@enviar')->name('enviar-oportunidade');

    //Usuários
    Route::get('/perfil-usuario', 'PerfilUsuarioController@index')->name('perfil-usuario');
    Route::post('/perfil-usuario', 'PerfilUsuarioController@atualizarInfo')->name('perfil-usuario');
    Route::post('/contato', 'PerfilUsuarioController@contato')->name('contato');

    /*
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    */
});

Route::middleware('loginPainel')->prefix('painel')->group(function (){
    //Home Painel
    Route::get('/', 'PainelController@index')->name('home-painel');
    Route::get('/sair', 'PainelLoginController@sair');
    Route::get('/email',function(){
        $emails = User::get('user_email');
        foreach($emails as $email){
            Mail::to($email->user_email)->send(new ContatoMensagemMail());
        }
    })->name('email-painel');
    Route::get('/novo-usuario', 'PainelController@novo')->name('novo-usuario-painel');
    Route::post('/novo-usuario', 'PainelController@novoPost')->name('novo-usuario-painel');
    Route::get('/alterar-senha', 'PainelController@alterarSenha')->name('alterar-senha-painel');
    Route::post('/alterar-senha', 'PainelController@alterarSenhaPost')->name('alterar-senha-painel');
    

    //Empresas
    Route::get('/empresas', 'PainelEmpresasController@index')->name('empresas-painel');
    Route::get('/empresas-excluir', 'PainelEmpresasController@excluir')->name('excluir-empresas-painel');

    //Relatorios
    Route::get('/ver-relatorio', 'PainelRelatorioController@index')->name('ver-relatorio-painel');
    Route::get('/editar-relatorio', 'PainelRelatorioController@editar')->name('editar-relatorio-painel');
    Route::get('/excluir-relatorio', 'PainelRelatorioController@excluir')->name('excluir-relatorio-painel');
    Route::get('/incluir-relatorio', 'PainelRelatorioController@novo')->name('incluir-relatorio-painel');
    Route::post('/incluir-relatorio', 'PainelRelatorioController@salvarNovo')->name('incluir-relatorio-painel');

    //Formas de Aproveitamento
    Route::get('/ver-formas', 'PainelAproveitamentoController@index')->name('ver-formas-painel');
    Route::get('/editar-formas', 'PainelAproveitamentoController@editar')->name('editar-formas-painel');
    Route::get('/excluir-formas', 'PainelAproveitamentoController@excluir')->name('excluir-formas-painel');
    Route::get('/incluir-formas', 'PainelAproveitamentoController@novo')->name('incluir-formas-painel');
    Route::post('/incluir-formas', 'PainelAproveitamentoController@salvarNovo')->name('incluir-formas-painel');


     //Noticías
    Route::get('/ver-noticias', 'PainelNoticiasController@index')->name('ver-noticias-painel');
    Route::get('/editar-noticias', 'PainelNoticiasController@editar')->name('editar-noticias-painel');
    Route::get('/excluir-noticias', 'PainelNoticiasController@excluir')->name('excluir-noticias-painel');
    Route::get('/incluir-noticias', 'PainelNoticiasController@novo')->name('incluir-noticias-painel');
    Route::post('/incluir-noticias', 'PainelNoticiasController@salvarNovo')->name('incluir-noticias-painel');
    
});