<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Permission;

use App\GroupPermission;

class UserGroup extends Model
{
    protected $table = "user_groups";

    protected $fillable = ['group_name', 'description', 'status'];

    public static function add($name, $desc, $status){
    	$userGroup = new UserGroup;
    	$userGroup->group_name = $name;
    	$userGroup->description = $desc;
    	$userGroup->status = $status;
    	$userGroup->save();
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    public function customers(){
        return $this->hasMany('App\Customer');
    }

    public function permissions(){
        return $this->hasMany('App\GroupPermission', 'group_id');
    }

    public function groupName($id){
        return UserGroup::findOrFail($id)->group_name;
    }

    public function permissionName($id){
        return Permission::findOrFail($id)->name;
    }

    public function hasPermission($gid, $pid){
        return GroupPermission::where(['group_id'=>$gid, 'permission_id' => $pid])->first();
    }


}
