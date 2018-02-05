<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $table = 'pessoas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'rg', 'cpf','telefone', 'fax', 'celular', 'cep', 'estado', 'cidade', 'bairro', 'endereco', 'numero', 'data_nasc', 'naturalidade', 'nacionalidade'
    ];

    public function associados()
    {
        return $this->hasOne('App\Associados');
    }

    public function cidades()
    {
        return $this->hasOne('App\Cidades', 'id', 'cidade');
    }
}
