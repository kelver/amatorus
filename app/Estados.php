<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'sigla',
        'codigo_ibge',
        'id_pais',
        'regiao_sigla',
        'regiao_nome',
        'ativo',
        'cep_de',
        'cep_ate',
        'ecep_de',
        'ecep_ate'
    ];

    public function cidades()
    {
        return $this->hasMany('App\Cidades', 'id_estado', 'id');
    }
}
