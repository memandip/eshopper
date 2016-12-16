<?php
namespace App\Validators;

use Illuminate\Support\Facades\Auth;
use Validator;
use App\Contact;

class UserValidator{

  public static function validateContact($input){

      return Validator::make($input, [
        'name'=>'required | min:4',
        'email'=>'required | min:6',
        'phone'=>'alpha_dash',
        'user_id'=>'numeric',
        'subject'=>'required',
        'message'=>'required | min:6'
      ]);
  }

}
