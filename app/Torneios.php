<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Torneios extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];
	
	public function times()
	{
		return $this->belongsToMany(Times::class, 'torneios_times')->withTimestamps();
	}
}
