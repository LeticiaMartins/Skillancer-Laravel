<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Projeto;
use App\User;

class ProjetosfreelaController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function exibirTodosProjetos() {
    $projetos = Projeto::orderBy('id_projeto', 'desc')->paginate(12);

    return view('projetos_freela')->with('listaDeProjetos', $projetos);
  }

  public function novo() {
    return view('projetos_freela');
  }


  public function aplicarProjeto(){
    return view('projetosfreela_aplicar');
  }


  public function exibirProjeto($id){
    $projeto = Projeto::find($id);
    $cliente = User::find($projeto->fk_idUser);
    return view('projeto_id')->with('projeto', $projeto)->with('cliente', $cliente->name);
  }

}
