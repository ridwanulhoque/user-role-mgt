<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user_role(){
    	return $this->hasOne('App\UserRole');
    }

    public function role_permissions(){
    	return $this->hasMany('App\RolePermissions');
    }
}
