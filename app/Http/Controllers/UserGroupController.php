<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserGroup;

use App\GroupPermission;

use Validator;

class UserGroupController extends Controller
{
   
  public function  getAddUsergroup(){
  	return view('admin.pages.usergroup.addusergroup');
  }

  public function postAddUserGroup(Request $request){
  	$groupname = $request->get('group_name');
  	$description = $request->get('group_description');
  	$validator = Validator::make($request->all(), [
  			'group_name' => 'required | min:4',
  			'group_description' => 'required | min:6'
  		]);
  	if($validator->fails()){
  		return redirect()->back()->withInput()->withErrors($validator->errors());
  	}

  	$usergroup = UserGroup::add($groupname, $description, 1);
  	return redirect()->back()->with(['success'=>'User Group added successfully.']);
  }

  public function viewusergroup(){
  	$data['usergroups'] = UserGroup::all();
  	return view('admin.pages.usergroup.viewusergroups',$data);
  }

  public function getEditUserGroup($id){
  	$usergroup = UserGroup::findOrFail($id);
  	return view('admin.pages.usergroup.editusergroup')->with(['usergroup'=>$usergroup]);
  }

  public function postEditUserGroup($id, Request $request){
  	$usergroup = UserGroup::findOrFail($id);
  	$usergroup->group_name = $request->get('group_name');
  	$usergroup->description = $request->get('group_description');
  	$usergroup->save();
  	return redirect()->back()->with(['success'=>'User Group updated successfully.']);
  }

  public function deleteUsergroup($id){
  	$usergroup = UserGroup::findOrFail($id);
  	$usergroup->delete();
  	return redirect()->back()->with(['success'=>'One User Group deleted successfully.']);
  }

  public function viewPermissions($id){
    $usergroup = UserGroup::findOrFail($id);
    $data['usergroup'] = $usergroup;
    $data['permissions'] = \App\Permission::all();
    return view('admin/pages/usergroup/viewpermissions')->with($data);
    foreach($usergroup->permissions as $up){
      echo $usergroup->groupName($up->group_id).' = '.$usergroup->permissionName($up->permission_id).'<br>';
    }
  }

  public function editPermission($id, Request $request){
    
    $permissions =  $request->only('permission');
    $permissions = $permissions['permission'];
    $usergroup = GroupPermission::where(['group_id' => $id])->delete();
    if(count($permissions) > 0){

      foreach ($permissions as $k => $v) {
        $gp = GroupPermission::where(['group_id' => $id, 'permission_id' => $k])->first();
        if($gp){
          $gp->permission_id = $k;
          $gp->save();
        } else  {
          $gp = new GroupPermission;
          $gp->group_id = $id;
          $gp->permission_id = $k;
          $gp->save();
        }
      }

    } else  {
      return redirect()->back()->with(['error' => 'Please select at least one field.']);
    }
    
    return redirect()->back()->with(['success' => 'User Group permissions successfully updated.']);
  }

}
