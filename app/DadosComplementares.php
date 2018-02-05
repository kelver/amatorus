<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosComplementares extends Model
{

    public $timestamps = false;
    protected $table = 'dadosComplementares';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'localTrabalho',
        'rua',
        'numero',
        'bairro',
        'cep',
        'estado',
        'cidade',
        'telefone',
        'fax',
        'admissaoAmam',
        'adesaoFamam',
        'seguro',
        'banco',
        'conta',
        'agencia',
        'tipoConta',
        'observacoes',
    ];

    public function associado()
    {
        return $this->belongsTo('App\Associado', 'associado_id', 'id');
    }
}
