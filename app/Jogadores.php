<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Jogadores extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'complemento', 'cep', 'bairro', 'numero', 'endereco', 'cidade', 'estado', 'celular', 'telefone', 'data_nasc', 'foto', 'idUser'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function estados()
    {
        return $this->hasOne('App\Estados', 'id', 'estado');
    }

    public function cidades()
    {
        return $this->hasOne('App\Cidades', 'id', 'cidade');
    }
	
    public function users()
    {
        return $this->belongsTo('App\User', 'idUser', 'id', 'users');
    }
	
	public function times() {
		return $this->belongsToMany(Times::class, 'times_jogadores')->withTimestamps();
	}
}
