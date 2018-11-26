<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;

class ProjetoController extends Controller
{
  public function exibir() {
    $projetos = Projeto::orderBy('nome')->paginate(10);

    return view('projetos_todos')->with('listaDeProjetos', $projetos);
  }

  public function novo() {
    return view('projeto_adicionar');
  }

 public function receberdados(Request $request) {
    $request->input('nome'); //ele chama a variável $request que é do tipo Request
    $request->validate([
     'nome' => 'unique:projeto|max:200'
    ]);

    $projeto = Projeto::create([
      'nome'=> $request->input('nome')
    ]);

    $projeto->save();
      return redirect('/projeto/exibir');
    }

  public function editar($id) {
    $projeto = Projeto::find($id);
    return view('projeto_editar')->with('projeto', $projeto);
  }

  public function receberAlteracoes(Request $request, $id){
    $request->validate([
      'nome' => 'required|min:2|max:20|unique:projeto'
   ]);

    $projeto = Projeto::find($id);
    $projeto->nome = $request->input('nome');
    $projeto->save();

    return redirect('/projeto/exibir');
  }

  public function excluir($id) {
    $projeto = Projeto::find($id);
    return view('projeto_deletar')->with('projeto', $projeto);
  }

  public function excluirProjeto(){
    $projeto = Projeto::find($id);
    $projeto->delete();

    return redirect('/projeto/exibir');
  }

}
