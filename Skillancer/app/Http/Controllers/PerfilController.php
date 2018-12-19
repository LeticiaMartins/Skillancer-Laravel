<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freelancer;
use Illuminate\Support\Facades\Auth;
use App\User;


class PerfilController extends Controller
{
    public function perfilDev(){
      $freelancer = Freelancer::where('fk_Id_user', Auth::id())->first();
      $User = User::find(Auth::id());
      $nome = $User->name;
      $sobrenome = $User->sobrenome;
      $email = $User->email;

      return view("perfildev")->with('freelancer', $freelancer)->with('user', $User)->with('nome', $nome)->with('sobrenome', $sobrenome)->with('email', $email);
    }
}
