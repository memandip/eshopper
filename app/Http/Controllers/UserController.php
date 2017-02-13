<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

use App\UserGroup;

use Validator;

use Response;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserRequest;

use App\User;

use App\Validators\UserValidator;

use App\Traits\UserTrait;

class UserController extends Controller
{

    use UserTrait;

    public function addUserForm(){
      $data['countries'] = Country::all();
      $data['usergroups'] = UserGroup::all();
      return view('admin/pages/user/adduser',$data);
    }

    public function addUser(UserRequest $request){
      $user = new User();
      $user->first_name = $request->input('firstname');
      $user->last_name = $request->input('lastname');
      $user->email = $request->input('email');
      $user->username = $request->input('username');
      $user->password = bcrypt($request->input('password'));
      $user->group_id = $request->input('usergroup');
      $user->country_id = $request->input('country');
      $user->address1 = $request->input('address1');
      $user->address2 = $request->input('address2');
      $user->company_name = $request->input('company');
      $user->job_title = $request->input('job');
      $user->phone_number = $request->input('phone_number');
      $user->mobile_number = $request->input('mobile_number');
      $user->fax = $request->input('fax');
      $user->save();
      return redirect()->back()->with(['success'=>'User is successfully Added.']);

    }

    public function viewUsers(){
      $usergroup = UserGroup::where('group_name','superadmin')->firstOrFail();
      $data['users'] = User::where('id','!=',Auth::user()->id)
                            ->where('group_id','!=',$usergroup->id)
                            ->get();
      $data['sn'] = 0;
      return view('admin/pages/user/viewusers')->with($data);
    }

    public function getEditUser($id){
      $user = User::findOrFail($id);

      if($user->group->group_name == 'superadmin'){
            return redirect('es/admin/viewusers');
        }

      $data['countries'] = Country::all();
      $data['usergroups'] = UserGroup::all();
      $data['user'] = $user;
      return view('admin/pages/user/edituser')->with($data);
    }

    public function postEditUser($id, Request $request){
        $user = User::findOrFail($id);

        if($user->group->group_name == 'superadmin'){
            return redirect('es/admin/viewusers');
        }

        $input = $request->all();
        $input['password'] = $input['password'] ? bcrypt($input['password']) : $user->password;
        $validateInput = UserValidator::validateExistingUser($input);
        if($validateInput->fails()){
            return redirect()->back()->withInput()->withErrors($validateInput);
        } else {
            $user->first_name = $request->input('firstname');
            $user->last_name = $request->input('lastname');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->password = $input['password'];
            $user->group_id = $request->input('usergroup');
            $user->country_id = $request->input('country');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->company_name = $request->input('company');
            $user->job_title = $request->input('job');
            $user->phone_number = $request->input('phone_number');
            $user->mobile_number = $request->input('mobile_number');
            $user->fax = $request->input('fax');
            $user->save();
            return redirect()->back()->with(['success'=>'User is successfully updated.']);
        }

    }

    public function activate($id){
      $user = User::findOrFail($id);
      $user->status = 1;
      $user->save();
      return Response::json(['success'=>'User is successfully activated.']);
    }

    public function deactivate($id){
      $user = User::findOrFail($id);
      $user->status = 0;
      $user->save();
      return Response::json(['success'=>'User is successfully deactivated.']);
    }

    public function deleteUser($id){
      $user = User::findOrFail($id);
      if($user->group->group_name == 'superadmin'){
        return redirect('es/admin/viewusers');
      }
      $user->delete();
      return Response::json(['success'=>'User is successfully deleted.']);
    }

    public function deletePermanently($id){
      $user = User::withTrashed()->findOrFail($id);
      if($user->group->group_name == 'superadmin'){
        return redirect('es/admin/viewusers');
      }
      $user->forceDelete();
      return redirect()->back()->with(['success' => 'User is permanently deleted.']);
      return Response::json(['success'=>'User is permanently deleted.']);
    }

    public function restoreUser($id){
      $user = User::withTrashed()->findOrFail($id);
      $user->restore();
      return Response::json(['success'=>'User is successfully restored.']);
    }

    public function profile(){
      $user = User::findOrFail(Auth::user()->id);
      return view('admin/pages/user/profile')->with(['user'=>$user]);
    }

    public function getSetting(){
      $user = User::findOrFail(Auth::user()->id);
      $usergroups = UserGroup::all();
      $countries = Country::all();
      $data = [
                'user'=>$user, 
                'usergroups' => $usergroups,
                'countries' => $countries
            ];
      return view('admin/pages/user/setting')->with($data);
    }

    public function postSetting(Request $request){
      $input = $request->all();
      $input['password'] = $input['password'] ? bcrypt($input['password']) : Auth::user()->password;
      $validateInput = UserValidator::validateAuthenticatedUser($input);
      if($validateInput->fails()){
        return redirect()->back()->withInput()->withErrors($validateInput);
      } else {
        $user = User::findOrFail(Auth::user()->id);
        $user->first_name = $request->input('firstname');
        $user->last_name = $request->input('lastname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = $input['password'];
        $user->group_id = $request->input('usergroup');
        $user->country_id = $request->input('country');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->company_name = $request->input('company');
        $user->job_title = $request->input('job');
        $user->phone_number = $request->input('phone_number');
        $user->mobile_number = $request->input('mobile_number');
        $user->fax = $request->input('fax');
        $user->save();
        return redirect()->back()->with(['success'=>'User is successfully updated.']);
      }
    }


}
