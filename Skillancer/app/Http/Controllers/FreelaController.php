<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Freelancer;

class FreelaController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function exibirTodosfreelancers() {
    $freelancer = Freelancer::orderBy('id_freelancer', 'desc')->paginate(24);

    return view('freela_todos')->with('listaDeFreelancers', $freelancer);
  }

  public function novo() {
    return view('freela_todos');
  }

  public function exibirFreelancer($id){
    $freelancer = Freelancer::find($id);
    $cliente = User::find($freelancer->fk_idUser);
    return view('projetosfreela_id')->with('freelancer', $freelancer)->with('cliente', $cliente->name);
  }

}
