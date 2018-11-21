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
    return view('home');
});

// Id porque como é um especifico que exibe ele vem de alguma pesquisa
Route::get('/perfildev/{id}', 'PerfilController@perfilDevId');

Route::get('/perfildev/todos', 'PerfilController@exibirTodosPerfilDev');
Route::get('/perfildev/adicionar', 'PerfilController@criarPerfilDev');
Route::post('/perfildev/adicionar', 'PerfilController@adicionarPerfilDev');
Route::get('/perfildev/editar', 'PerfilController@editarPerfilDev');
Route::put('/perfildev/editar', 'PerfilController@receberAlteracoesDev');
Route::get('/perfildev/deletar', 'PerfilController@deletarDev');
Route::get('/perfildev/deletar', 'PerfilController@deletarPerfilDev');

Route::get('/faq', 'FaqControler@faqGeral');

Route::get('/projetos', 'ProjetoController@exibirTodosProjetos');
Route::get('/projeto/{id}', 'ProjetoController@progetoId');
Route::get('/projeto/adicionar', 'ProjetoController@criarProjeto');
Route::post('/projeto/adicionar', 'ProjetoController@adicionarProjeto');
Route::get('/projeto/editar', 'ProjetoController@editarProjeto');
Route::put('/projeto/editar', 'ProjetoController@receberAlteracoes');
Route::get('/projeto/deletar', 'ProjetoController@deletar');
Route::get('/projeto/deletar', 'ProjetoController@deletarProjeto');
