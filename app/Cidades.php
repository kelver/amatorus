<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
        'nome',
        'sigla',
        'codigo_ibge',
        'id_estado',
        'cep_de',
        'cep_ate',
        'ecep_de',
        'ecep_ate'
    ];

    public function estados()
    {
        return $this->hasOne('App\Estados', 'id', 'id_estado');
    }
}
