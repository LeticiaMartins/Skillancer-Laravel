<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
      protected $table = 'projeto';
      protected $primaryKey = 'id_projeto';
      protected $fillable = ['titulo','tipo_servico','descricao','imagem_url','fk_id_freelancer','fk_idPagamento','fk_idUser'];
      public $timestamps = false;
}
