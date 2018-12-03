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
    return redirect('/home');
});

Route::get('/perfildev', 'PerfilController@perfilDev');

Route::get('/home', 'HomeController@index')->name('home');

// Id porque como é um especifico que exibe ele vem de alguma pesquisa


//crud perfil dev
Route::get('/perfildev/todos', 'PerfilController@exibirTodosPerfilDev');
Route::get('/perfildev/adicionar', 'PerfilController@criarPerfilDev');
Route::post('/perfildev/adicionar', 'PerfilController@adicionarPerfilDev');
Route::get('/perfildev/editar', 'PerfilController@editarPerfilDev');
Route::put('/perfildev/editar', 'PerfilController@receberAlteracoesDev');
Route::get('/perfildev/deletar', 'PerfilController@deletarDev');
Route::delete('/perfildev/deletar', 'PerfilController@deletarPerfilDev');

Route::get('/faq', 'FaqController@faqGeral');

//pag de projetos
Route::get('/projeto_todos', 'ProjetoController@exibirTodosProjetos');
Route::get('/projeto/exibir/{id}', 'ProjetoController@exibirProjeto');

//pag de projetos para exibir para o freelancer aplicar
Route::get('/projetos_freela', 'ProjetosfreelaController@exibirTodosProjetos');
Route::get('/projetosfreela/exibir/{id}', 'ProjetosfreelaController@exibirProjeto');

//pag para exibir todos os freelancer
Route::get('/freela_todos', 'FreelaController@exibirTodosFreelancers');
Route::get('/Freela/exibir/{id}', 'FreelaController@exibirFreelancer');


Auth::routes();
Route::get('/cadastro_freelancer','CadastroController@cadastroFreelancer');
Route::post('/cadastro_freelancer','CadastroController@cadastroRetorno');

//crud pag de projetos
Route::get('/projeto/adicionar', 'ProjetoController@criarProjeto');
Route::post('/projeto/adicionar', 'ProjetoController@adicionarProjeto');
Route::get('/projeto/editar/{id}', 'ProjetoController@editarProjeto');
Route::put('/projeto/editar/{id}', 'ProjetoController@receberAlteracoes');
Route::get('/projeto/deletar/{id}', 'ProjetoController@excluir');
Route::delete('/projeto/deletar/{id}', 'ProjetoController@excluirProjeto');

//crud pag de projetos do freelancer
Route::get('/projetosfreela/aplicar', 'ProjetosfreelaController@aplicarProjeto');
//Route::post('/projetosfreela/aplicar', 'ProjetosfreelaController@enviarProjeto');
