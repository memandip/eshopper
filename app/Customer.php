<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Customer extends Model
{
    use softDeletes;

    protected $fillable = ['full_name', 'email' ,'username', 'password',  'address', 'country_id', 'group_id', 'credit_card_no'];
    protected $hidden = ['password'];


    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function group(){
        return $this->belongsTo('App\UserGroup');
    }

    public function hello(){
    	return 'Hello World!!';
    }
}
