<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer_has_habilidade extends Model
{
    protected $table = 'freelancer_has_habilidade';
    protected $fillable = ['habilidade_id_habilidade', 'Freelancer_id_freelancer'];
    public $timestamps = false;
}
