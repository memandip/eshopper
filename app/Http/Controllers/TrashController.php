<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Customer;

use DB;

class TrashController extends Controller
{
    
	public function trashedUsers(){
		$data['users'] = User::onlyTrashed()->get();
		return view('admin/pages/trash/trashedUsers', $data);
	}

	public function trashedCustomers(){
		$data['customers'] = Customer::onlyTrashed()->get();
		return view('admin/pages/trash/trashedCustomers', $data);
	}

}
