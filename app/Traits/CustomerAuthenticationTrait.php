<?php 
namespace App\Traits;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use App\Customer;

Trait CustomerAuthenticationTrait{

	protected $data;

	public function login(Request $request){
		
		if($this->validateLogin($request->all())->fails()){
			$request->session()->flash('error','Email and password field is required.');
			return redirect()->back()->withInput();
		}

		$email = $request['email'];
		$password = $this->hashPassword($request['password']);
		$credentials = ['email'=>$email,'password'=>$password];
		
		if(!$this->customerExists($credentials)){
			$request->session()->flash('error','Invalid email and password combination.');
			return redirect()->back()->withInput();
		}
		
		$this->saveCustomer($this->data, $request);
		return redirect('account');
	}

	public function logout(Request $request){
		$request->session()->forget('customer');
		return redirect('/');
	}

	public function hashPassword($password){
		return sha1(hash_hmac('sha512', $password, env('APP_KEY')));
	}

	public function validateLogin($input){
		return Validator::make($input, [
				'email'=>'required',
				'password'=>'required'
			]);
	}

	public function saveCustomer($customer, Request $request){
		return $request->session()->put('customer',$customer);
	}

	public function customerExists($credentials){
		$customer = Customer::where($credentials)->get()->first();
		if($customer){
			$this->data = $customer;
			return true;
		}	else 	{
			return false;
		}
	}

}