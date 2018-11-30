<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freelancer;
use Illuminate\Support\Facades\Auth;


class PerfilController extends Controller
{
    public function perfilDev(){
      $freelancer = Freelancer::where('fk_Id_user', Auth::id())->first();

      return view("perfildev")->with('freelancer', $freelancer);
    }
}
