<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupPermission extends Model
{
    protected $table = 'group_permissions';

    public function group(){
    	return $this->belongsToMany('App\UserGroup');
    }

    public function permission(){
    	return $this->belongsToMany('App\Permission');
    }
}
