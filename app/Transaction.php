<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'transactions';
    protected $fillable = ['total_amount','payment_method','customer_id'];

    public static function addTransaction($amount, $method, $customer_id){
    	$transaction = new Transaction;
    	$transaction->total_amount = $amount;
    	$transaction->payment_method = $method;
    	$transaction->customer_id = $customer_id;
    	$transaction->save();
    }
}
