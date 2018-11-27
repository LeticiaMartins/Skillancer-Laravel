<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;

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
      $projetos = Projeto::orderBy('titulo')->paginate(10);

      return view('home')->with('listaDeProjetos', $projetos);
    }
}
