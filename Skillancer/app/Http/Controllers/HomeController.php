<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projetos = Projeto::orderBy('titulo')->orderBy('id_projeto', 'desc')->take(3)->get();

      // $nomes = array();
      //
      // foreach($projetos as $projeto){
      //   $nomes[] = ([
      //       'usuariosNomes' => User::find($projeto->fk_idUser)
      //   ]);
      // }

      return view('home')
      ->with('listaDeProjetos', $projetos);
      // ->with('cliente', $nomes);
    }

    public function exibirProjeto($id){


      // $cliente = User::find($projeto->fk_idUser);
      dd($cliente->username);
      return view('home')
        ->with('cliente', $cliente)
        ->with('projeto', $projeto);
    }
}
