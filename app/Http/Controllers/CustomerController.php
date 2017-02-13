<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Customer;

use App\Http\Requests\CustomerRequest;

use App\UserGroup;

use App\Traits\CustomerAuthenticationTrait as Authenticable;

use App\Transaction;

use App\Http\Controllers\CartController;

use Cart;

use Validator;

class CustomerController extends Controller
{   

	use Authenticable;
	protected $data = [];

	public function __construct(){
		 
	}

	public function addCustomer(CustomerRequest $request){
		$customer = new Customer;
		$customer->full_name = $request->get('full_name');
		$customer->email = $request->get('email');
		$customer->username = $request->get('username');
		$customer->password = $this->hashPassword($request->get('password'));
		$customer->country_id = $request->get('country');
		$customer->address = $request->get('address');
		$group = UserGroup::where(['group_name'=>'customers'])->get()->first();
		if(!$group){
			UserGroup::add('customers','Customers of eshopper.', 1);
		}
		$group = UserGroup::where(['group_name'=>'customers'])->get()->first();
		$customer->group_id = $group->id; 
		$customer->save();
		return redirect()->back()->with(["success"=>"successfully signed up. Login to access your account."]);
	}

	public function account(Request $request){
		if($request->session()->get('customer')){
			$customerId = $request->session()->get('customer')->id;
			$transactions = Transaction::where(['customer_id'=>$customerId])->get();
		}	else 	{
			$transactions = [];
		}
		$customerId = $request->session()->get('customer')->id;
		$customer = Customer::findOrFail($customerId);
		$data = ['transactions'=>$transactions, 'countries' => \App\Country::all(), 'customer' => $customer];
		return view('customer/pages/customerIndex')->with($data);
	}

	public function postSetting(Request $request){
		$input = $request->all();
		$customer = $request->session()->get('customer');
		$input['password'] = $input['password'] ? $this->hashPassword($input['password']) : $customer->password;
		$validate = Validator::make($input, [
					'full_name'=>'required',
		            'username'=>'required | min:6 | unique:customers,username,'.$customer->id,
		            'email'=>'required | min:6 | unique:customers,email,'.$customer->id,
		            'password'=>'required | min:6',
		            'country'=>'required',
		            'address'=>'required'
			]);
		if($validate->fails()){
			return redirect()->back()->withInput()->withErrors($validate);
		}	else 	{
			$customer->full_name = $request->get('full_name');
			$customer->email = $request->get('email');
			$customer->username = $request->get('username');
			$customer->password = $this->hashPassword($request->get('password'));
			$customer->country_id = $request->get('country');
			$customer->address = $request->get('address');
			$customer->save();
			return redirect()->back()->with(["success"=>"Your account is successfully updated."]);
		}
	}

	public function confirmCheckout(Request $request){
		if($request->session()->get('customer')){
			$amount = CartController::total();
			$method = 'Online Transaction';
			$customer_id = $request->session()->get('customer')->id;
			$transaction = new Transaction;
	    	$transaction->total_amount = $amount;
	    	$transaction->payment_method = $method;
	    	$transaction->customer_id = $customer_id;
	    	$transaction->save();

			if($transaction){
				Cart::destroy();
				return redirect('checkout/success')->with(['success'=>'Checkout Successful.']);
			}	else 	{
				return redirect()->back()->withErrors(['error'=>'Unable to complete the transaction.']);
			}

		}	else 	{
			return redirect()->back();
		}
	}

	public function checkoutSuccess(){
		return view('public/pages/checkoutSuccess');
	}

	public function customers(){
		return view('admin/pages/customer/customerList')->with(['customers' => Customer::all()]);
	}

	public function getCustomers($offset, $perpage = 10){
		if($offset){
			$customers = (new Customer)->skip($offset)->take($perpage)->get();
		}	else 	{
			$customers = (new Customer)->take($perpage)->get();
		}	
		$totalCustomers = count(Customer::all());
		$total_pages = ceil( $totalCustomers / $perpage);
		$current_page = ceil( $offset / $perpage) == 0 ? 1 : ceil( $offset / $perpage);

		for ($i=1; $i <= $total_pages ; $i++) { 
			$totalPages[] = $i;
		}

		return \Response::json([
				'customers' => $customers,
				'currentPage' => $current_page,
				'pages' => $totalPages,
				'perpage' => $perpage,
				'totalCustomers' => $totalCustomers
			]);
	}

	public function activate($id){
		$customer = Customer::findOrFail($id);
		$customer->status = 1;
		$customer->save();
		return \Response::json(['success' => true, 'customer' => $customer]);
	}

	public function deactivate($id){
		$customer = Customer::findOrFail($id);
		$customer->status = 0;
		$customer->save();
		return \Response::json(['success' => true]);
	}

	public function delete($id){
		$customer = Customer::findOrFail($id);
		$customer->delete();
		return redirect()->back()->with(['success' => 'One customer is deleted.']);
	}

	public function restore($id){
		$customer = Customer::withTrashed()->findOrFail($id);
		$customer->restore();
		return redirect()->back()->with(['success' => 'One customer is restored.']);
	}

	public function deletePermanently($id){
		$customer = Customer::withTrashed()->findOrFail($id);
		$customer->forceDelete();
		return redirect()->back()->with(['success' => 'One customer is deleted permanently.']);
	}

}
