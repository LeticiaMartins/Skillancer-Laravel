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

Route::get('/perfildev', 'PerfilController@perfilDev');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Id porque como é um especifico que exibe ele vem de alguma pesquisa

Route::get('/perfildev/todos', 'PerfilController@exibirTodosPerfilDev');
Route::get('/perfildev/adicionar', 'PerfilController@criarPerfilDev');
Route::post('/perfildev/adicionar', 'PerfilController@adicionarPerfilDev');
Route::get('/perfildev/editar', 'PerfilController@editarPerfilDev');
Route::put('/perfildev/editar', 'PerfilController@receberAlteracoesDev');
Route::get('/perfildev/deletar', 'PerfilController@deletarDev');
Route::delete('/perfildev/deletar', 'PerfilController@deletarPerfilDev');

Route::get('/faq', 'FaqController@faqGeral');

Route::get('/projeto_todos', 'ProjetoController@exibirTodosProjetos');
Route::get('/projeto/adicionar', 'ProjetoController@criarProjeto');
Route::post('/projeto/adicionar', 'ProjetoController@adicionarProjeto');
Route::get('/projeto/editar', 'ProjetoController@editarProjeto');
Route::put('/projeto/editar', 'ProjetoController@receberAlteracoes');
Route::get('/projeto/deletar', 'ProjetoController@deletar');
Route::delete('/projeto/deletar', 'ProjetoController@deletarProjeto');
Route::get('/projeto/{id}', 'ProjetoController@exibirProjeto');
