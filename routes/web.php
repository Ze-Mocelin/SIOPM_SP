<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\QuestionnaireController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/login2', [App\Http\Controllers\LoginController::class, 'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::group(['middleware' => 'group'], function () {

Route::middleware(['auth'])->group(function () {
    Route::post('home/sessao', [App\Http\Controllers\HomeController::class, 'sessao'])->name('home.sessao');
    Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');
    Route::get('/toggle-dark-mode', 'App\Http\Controllers\HomeController@toggleDarkMode')->name('toggle-dark-mode');

    Route::get('ocorrencia/cadastro', [App\Http\Controllers\OcorrenciaController::class, 'index'])->name('ocorrencia.cadastro');
    Route::post('ocorrencia/create', [App\Http\Controllers\OcorrenciaController::class, 'create'])->name('ocorrencia.create');
    Route::get('cidades', [App\Http\Controllers\CidadeController::class, 'index'])->name('cidade');
    Route::post('cidade/create', [App\Http\Controllers\CidadeController::class, 'create'])->name('cidade.create');
    Route::post('cidade/delete/{id}', [App\Http\Controllers\CidadeController::class, 'destroy'])->name('cidade.delete');
    Route::post('cidade/edit/{id}', [App\Http\Controllers\CidadeController::class, 'update'])->name('cidade.edit');
    Route::get('batalhoes', [App\Http\Controllers\BpmmController::class, 'batalhoes'])->name('batalhoes');
    Route::get('bpmm', [App\Http\Controllers\BpmmController::class, 'index'])->name('bpmm');
    Route::post('bpmm/create', [App\Http\Controllers\BpmmController::class, 'create'])->name('bpmm.create');
    Route::post('bpmm/delete/{id}', [App\Http\Controllers\BpmmController::class, 'destroy'])->name('bpmm.delete');
    Route::post('bpmm/edit/{id}', [App\Http\Controllers\BpmmController::class, 'update'])->name('bpmm.edit');
    Route::get('admin_quick_shortcuts', [App\Http\Controllers\UserController::class, 'adminmaster'])->name('admin_quick_shortcuts');
    Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
    Route::post('usuario/create', [App\Http\Controllers\UserController::class, 'create'])->name('usuario.create');
    Route::post('usuario/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuario.delete');
    Route::post('usuario/edit/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('usuario.edit');
    Route::post('usuario/status/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('usuario.status');
    Route::post('usuario/passreset', [App\Http\Controllers\UserController::class, 'passreset'])->name('usuario.passreset');
    Route::get('ramal', [App\Http\Controllers\RamaisController::class, 'index'])->name('ramal');
    Route::post('ramal/create', [App\Http\Controllers\RamaisController::class, 'create'])->name('ramal.create');
    Route::post('ramal/delete/{id}', [App\Http\Controllers\RamaisController::class, 'destroy'])->name('ramal.delete');
    Route::post('ramal/edit/{id}', [App\Http\Controllers\RamaisController::class, 'update'])->name('ramal.edit');
    Route::get('naturezaocorrencia', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'index'])->name('naturezaocorrencia');
    Route::post('naturezaocorrencia/create', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'create'])->name('naturezaocorrencia.create');
    Route::post('naturezaocorrencia/edit/{id}', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'update'])->name('naturezaocorrencia .edit');
    Route::post('naturezaocorrencia/status/{id}', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'edit'])->name('naturezaocorrencia.status');
    //Route::get('mapa', [App\Http\Controllers\MapaController::class, 'index'])->name('mapa');
    //Route::post('mapa/create', [App\Http\Controllers\MapaController::class, 'create'])->name('mapa.create');
    //Route::post('mapa/delete/{id}', [App\Http\Controllers\MapaController::class, 'destroy'])->name('mapa.delete');

    //Route::get('/mapa', 'MapaController@showMap');
    Route::get('cadastro190', [App\Http\Controllers\Cadastro190Controller::class, 'index'])->name('cadastro190');
    Route::post('cadastro190', [App\Http\Controllers\Cadastro190Controller::class, 'create'])->name('cadastro190');

    Route::post('cadastro190/savestep', [App\Http\Controllers\Cadastro190Controller::class, 'savestep'])->name('cadastro190.savestep');

    Route::post('cadastro190/perguntas', [App\Http\Controllers\QuestionController::class, 'submit'])->name('pageQuestion');

    Route::get('naturezaocorrenciaperguntas', [App\Http\Controllers\NatOcorPerguntasController::class, 'index'])->name('naturezaocorrenciaperguntas');
    Route::post('naturezaocorrenciaperguntas/create', [App\Http\Controllers\NatOcorPerguntasController::class, 'create'])->name('naturezaocorrenciaperguntas.create');
    Route::post('naturezaocorrenciaperguntas/status/{id}', [App\Http\Controllers\NatOcorPerguntasController::class, 'edit'])->name('naturezaocorrenciaperguntas.status');
    Route::post('naturezaocorrenciaperguntas/edit/{id}', [App\Http\Controllers\NatOcorPerguntasController::class, 'update'])->name('naturezaocorrenciaperguntas.edit');

    Route::post('naturezaocorrenciarespostas/create', [App\Http\Controllers\NatOcorPerguntasController::class, 'create_resposta'])->name('naturezaocorrenciaresposta.create');
    Route::post('naturezaocorrenciarespostas/status/{id}', [App\Http\Controllers\NatOcorPerguntasController::class, 'edit_resposta'])->name('naturezaocorrenciaresposta.status');
    Route::post('naturezaocorrenciarespostas/edit/{id}', [App\Http\Controllers\NatOcorPerguntasController::class, 'update_resposta'])->name('naturezaocorrenciaresposta.edit');

    Route::get('despachador', [App\Http\Controllers\DespachadorController::class, 'index'])->name('despachador');
    Route::post('despachador/observar', [App\Http\Controllers\DespachadorController::class, 'despachadorobservar'])->name('despachador.observar');
    Route::post('despachador/redirecionar', [App\Http\Controllers\DespachadorController::class, 'despachadorredirecionar'])->name('despachador.redirecionar');
    Route::post('despachador/detalhes_ocorrencias', [App\Http\Controllers\DespachadorController::class, 'despachadordetalhesocorrencia'])->name('despachador.detalhes.ocorrencias');
    Route::get('despachador/organogramadespachador', [App\Http\Controllers\DespachadorController::class, 'organogramadespachador'])->name('despachador.organograma');
    Route::get('despachador/organograma190', [App\Http\Controllers\DespachadorController::class, 'organograma190'])->name('despachador.organograma190');



    Route::get('gerenciarcpa', [App\Http\Controllers\GerenciarcpaController::class, 'index'])->name('gerenciarcpa');
    Route::post('gerenciarcpa/update', [App\Http\Controllers\GerenciarcpaController::class, 'update'])->name('gerenciarcpa.update');
    Route::post('gerenciarcpa/delete', [App\Http\Controllers\GerenciarcpaController::class, 'destroy'])->name('gerenciarcpa.delete');
    Route::resource("gerenciacpa" , App\Http\Controllers\GerenciarcpaController::class);
    Route::get('ajax/{function?}', [App\Http\Controllers\AjaxController::class, 'index']);
    Route::get('chefia/estatistica', [App\Http\Controllers\ChefiaController::class, 'index']);
    Route::get('chefia/logados', [App\Http\Controllers\ChefiaController::class, 'logados'])->name('chefia.logados');
    Route::get('chefia/organograma_despachador_chefia', [App\Http\Controllers\ChefiaController::class, 'organogramadespachadorchefia'])->name('chefia.organograma_despachador.chefia');
    Route::get('chefia/organograma190', [App\Http\Controllers\ChefiaController::class, 'organograma190'])->name('chefia.organograma190');

    Route::get('supervisor190/estatistica', [App\Http\Controllers\Supervisor190Controller::class, 'index']);
    Route::get('supervisor/organograma190', [App\Http\Controllers\Supervisor190Controller::class, 'supervisororganograma190'])->name('supervisor.organograma_190');

    Route::get('cpa/estatistica', [App\Http\Controllers\CpaestatisticaController::class, 'index']);

    Route::get('veiculocrime', [App\Http\Controllers\PlanilhacaratergeralController::class, 'index'])->name('planilhacaratergeral');
    Route::get('veiculocrimepersonalizada', [App\Http\Controllers\PlanilhacaraterpersonalizadaController::class, 'index'])->name('planilhacaraterpersonalizada');
    Route::get('cadastro/despachador', [App\Http\Controllers\CadastrodespachadorController::class, 'index'])->name('cadastrodespachador');
    Route::get('ocorrencias', [App\Http\Controllers\DespachadorController::class, 'getOcorrency'])->name('ocorrencias');


    Route::get('usuarios/logados', [App\Http\Controllers\UserController::class, 'usuarioslogados'])->name('usuarioslogados');

    Route::get('/publications', [App\Http\Controllers\PublicationController::class, 'index'])->name('publications');
    Route::post('/publications', [App\Http\Controllers\PublicationController::class, 'store'])->name('publications');
    Route::get('/publications_instrucoes_sistema_civil', [App\Http\Controllers\PublicationController::class, 'instrucoes_sistema_civil'])->name('instrucoes_sistema');
    Route::get('/publications_instrucoes_cadastro_ocorrencias', [App\Http\Controllers\PublicationController::class, 'instrucoes_cadastro_ocorrencias'])->name('instrucoes_cadastro_ocorrencias');
    Route::get('/publications_instrucoes_sistema', [App\Http\Controllers\PublicationController::class, 'instrucoes_sistema'])->name('instrucoes_instrucoes_sistema');
    Route::get('/publications_instrucoes_ordem_servico', [App\Http\Controllers\PublicationController::class, 'instrucoes_ordem_servico'])->name('instrucoes_ordem_servico');
    Route::get('/publications_instrucoes_icc', [App\Http\Controllers\PublicationController::class, 'instrucoes_icc'])->name('instrucoes_icc');
    Route::get('/publications/{id}', [App\Http\Controllers\PublicationController::class, 'show'])->name('publications.id');
    Route::get('/viewed-publications', [App\Http\Controllers\PublicationController::class, 'index'])->name('viewed-publications');

    Route::post('/newfolder-publication', [App\Http\Controllers\PublicationController::class, 'incluirNovaPasta'])->name('newfolder-publication');
});
//});
/*
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
*/
