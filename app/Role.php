<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = [
        'name', 'display_name', 'description'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function addPermission($permission)
    {
        if($this->existPermission($permission)){
            return;
        }

        return $this->permissions()->attach($permission);
    }

    public function existPermission($permission)
    {
        if ($permission) {
            $permission = Permission::where('id','=',$permission->id)->firstOrFail();
        }
        return (boolean) $this->permissions()->find($permission->id);
    }

    public function removePermission($permission)
    {
        if ($permission) {
            $permission = Permission::where('id','=',$permission->id)->firstOrFail();
        }
        return (boolean) $this->permissions()->detach($permission->id);
    }
}