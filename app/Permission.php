<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function role_permissions(){
    	return $this->hasMany('App\RolePermission');
    }
}
