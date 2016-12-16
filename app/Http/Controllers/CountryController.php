<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

use Validator;

class CountryController extends Controller
{

	public function getAddCountry(){
		return view('admin/pages/country/addcountry');
	}

	public function postAddCountry(Request $request){
		$name = $request->get('name');
		$iso2 = $request->get('iso_2');
		$iso3 = $request->get('iso_3');
		$dailingCode = $request->get('dialing_code');
		$nationality = $request->get('nationality');
		$status = $request->get('status');
		
		if($this->validatorCountryInput($request->all())->fails()){
			return redirect()->back()->withInput()->withErrors($this->validatorCountryInput($request->all()));
		}	else 	{
			Country::add($name, $iso2, $iso3, $dailingCode, $nationality, $status);
			return redirect()->back()->with(['success'=>'One country is successfully added.']);
		}

	}

	public function viewCountries(){
		return view('admin/pages/country/viewcountries')->with(['countries' => Country::all()]);
	}

	public function getEditCountry($id){
		$country = Country::findOrFail($id);
		return view('admin/pages/country/editCountry')->with(['country' => $country]);
	}

	public function postEditCountry($id, Request $request){
		$name = $request->get('name');
		$iso2 = $request->get('iso_2');
		$iso3 = $request->get('iso_3');
		$dailingCode = $request->get('dialing_code');
		$nationality = $request->get('nationality');
		$status = $request->get('status');
		if($this->validatorCountryInput($request->all())->fails()){
			return redirect()->back()->withInput()->withErrors($this->validatorCountryInput($request->all()));
		}	else 	{
			Country::edit($name, $iso2, $iso3, $dailingCode, $nationality, $status, $id);
			return redirect()->back()->with(['success'=>'Country is successfully updated.']);
		}
	}

	public function validatorCountryInput($input){
		return Validator::make($input, [
				'name' => 'required | alpha',
				'iso_2' => 'required | alpha | size:2',
				'iso_3' => 'required | alpha | size:3',
				'dialing_code' => 'required | numeric',
				'nationality' => 'required | alpha',
				'status' => 'required'
			]);
	}

	public function deleteCountry($id){
		$country = Country::findOrFail($id);
		$country->delete();
		return redirect()->back()->with(['success'=>'One country deleted.']);
	}

}
