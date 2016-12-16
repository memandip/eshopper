<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Permission;

use App\GroupPermission;

use Validator;

class PermissionController extends Controller
{

	public function getAddPermission(){
		return view('admin/pages/permission/addpermission');
	}

	public function postAddPermission(Request $request){
		$name = $request->get('name');
		$description = $request->get('description');
		$validator = $this->validateInput($request->all());
		if($validator->fails()){
			return redirect()->back()->withInput()->withErrors($validator);
		}	else 	{
			$gp = new Permission;
			$gp->name = $name;
			$gp->description = $description;
			$gp->save();
			return redirect()->back()->with(['success' => 'One permission successfully added.']);
		}
	}
    
	public function viewPermissions(){
		$permissions = Permission::all();
		return view('admin/pages/permission/viewpermissions')->with(['permissions'=>$permissions]);
	}

	public function getEditPermission($id){
		$permission = Permission::findOrFail($id);
		return view('admin/pages/permission/editpermission')->with(['permission' => $permission]);
	}

	public function postEditPermission($id, Request $request){
		$name = $request->get('name');
		$description = $request->get('description');
		$validator = $this->validateInput($request->all());
		if($validator->fails()){
			return redirect()->back()->withInput()->withErrors($validator);
		}	else 	{
			$gp = Permission::findOrFail($id);
			$gp->name = $name;
			$gp->description = $description;
			$gp->save();
			return redirect()->back()->with(['success' => 'One permission successfully updated.']);
		}
	}

	public function validateInput($input){
		return Validator::make($input, [
					'name' => 'required | regex: /^[a-zA-z ]*$/',
					'description' => 'required | min:6'
				]);
	}

	public function deletePermission($id){
		$permission = Permission::findOrFail($id);
		$permission->delete();
		return redirect()->back()->with(['success' => 'One permission deleted.']);
	}

}
