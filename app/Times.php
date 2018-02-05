<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    public $timestamps = false;

    protected $table = 'times';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'brasao', 'capitao'
    ];
    
	public function jogadores()
	{
		return $this->belongsToMany(Jogadores::class, 'times_jogadores')->withTimestamps();
	}
 
	public function torneios()
	{
		return $this->belongsToMany(Torneios::class, 'torneios_times')->withTimestamps();
	}

}
