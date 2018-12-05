<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projeto;

class PesquisarController extends Controller
{
    public function pesquisar(Request $request)
    {
      $projetos = Projeto::where('titulo','like','%'.$request->input('busca').'%')->paginate(12);

      return view('projeto_todos')->with('listaDeProjetos', $projetos);
    }
}
