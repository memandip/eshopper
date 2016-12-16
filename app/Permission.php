<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['name', 'description'];

    public function groupPermission(){
    	return $this->hasMany('App\GroupPermission');
    }
    
}
