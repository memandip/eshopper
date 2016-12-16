<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';

    protected $fillable = ['name', 'iso_2', 'iso_3', 'dailing_code', 'nationality', 'status'];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function customer(){
        return $this->hasMany('App\Customer');
    }

    public static function add($name, $iso2, $iso3, $dailingCode, $nationality, $status){
    	$country = new Country;
    	$country->name = $name;
    	$country->iso_2 = $iso2;
    	$country->iso_3 = $iso3;
    	$country->dialing_code = $dailingCode;
    	$country->nationality = $nationality;
    	$country->status = $status;
    	$country->save();
    }

    public static function edit($name, $iso2, $iso3, $dailingCode, $nationality, $status, $id){
    	$country = Country::findOrFail($id);
    	$country->name = $name;
    	$country->iso_2 = $iso2;
    	$country->iso_3 = $iso3;
    	$country->dialing_code = $dailingCode;
    	$country->nationality = $nationality;
    	$country->status = $status;
    	$country->save();
    }
}
