<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freelancer;
use Illuminate\Support\Facades\Auth;
use App\User;


class PerfilController extends Controller
{
    public function perfilDev($id_user){
      $freelancer = Freelancer::where('fk_Id_user', Auth::id())->first();
      $User = User::find($id_user);
      $nome = User::find($User->name);
      $sobrenome = User::find($User->sobrenome);
      $email = User::find($User->email);

      return view("perfildev")->with('freelancer', $freelancer)->with('user', $User)->with('nome', $name)->with('sobrenome', $sobrenome)->with('email', $email);
    }
}
