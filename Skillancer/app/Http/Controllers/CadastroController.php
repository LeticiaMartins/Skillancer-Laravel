<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Cadastro_Controller extends Controller
{
    public function cadastro($data) {
        
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $user->save();
    }
}
