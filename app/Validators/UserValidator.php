<?php
namespace App\Validators;

use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class UserValidator{

  public static function validateExistingUser($input){

      return Validator::make($input, [
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required | min:6 | unique:users,email,'.$input['user_id'],
        'username'=>'required | min:6 | unique:users,username,'.$input['user_id'],
        'password'=>'required | min:6',
        'usergroup'=>'required',
        'country'=>'required',
        'address1'=>'required'
      ]);

  }

  public static function validateAuthenticatedUser($input){
    return Validator::make($input, [
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required | min:6 | unique:users,email,'.Auth::user()->id,
        'username'=>'required | min:6 | unique:users,username,'.Auth::user()->id,
        'password'=>'required | min:6',
        'usergroup'=>'required',
        'country'=>'required',
        'address1'=>'required'
      ]);
  } 

}
