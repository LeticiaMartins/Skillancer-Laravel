<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

      protected $table = 'projeto';
      protected $primaryKey = 'projeto_id';
      protected $fillable = ['titulo','tipo_servico','descricao','fk_id_freelancer','fk_idPagamento','fk_idUser'];
      public $timestamps = false;

}
