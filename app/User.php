<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;

    //Entrust
    use EntrustUserTrait;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','telefone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function addRole($role)
    {
        if($this->existRole($role)){
            return;
        }

        return $this->roles()->attach($role);
    }

    public function existRole($role)
    {
        if(is_string($role)){
            $papel = Role::where('name', '=', $role)->firstOrFail();
        }else{
            $role = Role::where('id','=',$role->id)->firstOrFail();
        }
        return (boolean) $this->roles()->find($role->id);
    }

    public function removeRole($role)
    {
        if ($role) {
            $role = Role::where('id','=',$role->id)->firstOrFail();
        }
        return (boolean) $this->roles()->detach($role->id);
    }

    public function validaGrupoUser($rolesValidar)
    {
        $userRoles = $this->roles();
        return $rolesValidar->intersect($userRoles)->count();
    }

    public function isAdmin()
    {
        return $this->existRole('admin');
    }
}
