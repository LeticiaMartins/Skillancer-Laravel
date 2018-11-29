<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Freelancer;
use App\Habilidade;

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

    public function cadastroFreelancer(){
        $habilidades = Habilidade::all();

        return view('cadastro_freelancer')->with('habilidades', $habilidades);
    }

    public function cadastroRetorno(Request $request){

        $freelancer = Freelancer::create([
            'fk_Id_user' =>  \Auth::user()->id,
            'tipo_servico' => $request['tipo_servico'],
            'linkedin' => $request['linkedin'],
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'github' => $request['github']
        ]);

        $freelancer->save();

        $habilidades = $request['habilidades'];
        foreach($habilidades as $item){
            $habilidade = Habilidade::create([
                'Freelancer_id_freelancer' =>  $freelancer->id_freelancer,
                'habilidade_id_habilidade' => $item
            ]); 
            $habilidade->save();
        }

        return [$freelancer, $habilidades];
    }


}
