<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancer';
    protected $primaryKey = 'id_freelancer';
    protected $fillable = [
        'fk_Id_user',
        'nota',
        'tipo_servico',
        'linkedin',
        'facebook',
        'twitter',
        'github'
    ];

    public $timestamps = false;

    public function habilidades(){
        return $this->belongsToMany(Habilidade::class, 'freelancer_has_habilidade', 'habilidade_id_habilidade', 'Freelancer_id_freelancer');
    }
}
