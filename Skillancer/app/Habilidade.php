<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidade extends Model
{
    protected $table = 'habilidade';
      protected $primaryKey = 'id_habilidade';
      protected $fillable = ['titulo'];
      public $timestamps = false;

}
