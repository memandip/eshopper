<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Traits\CustomerAuthenticationTrait as Authenticable;

class CustomersTableSeeder extends Seeder
{
	use Authenticable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	
    	for ($i=0; $i < 50; $i++) { 
    		$username = $faker->username;
  			DB::table('customers')->insert([
  					'full_name' => $faker->name,
  					'email' => $faker->email,
  					'username' => $username,
  					'password' => $this->hashPassword($username),
  					'country_id' => 50 + $i,
  					'group_id' => 20,
  					'address' => $faker->address,
  					'credit_card_no' => $faker->creditCardNumber
  				]);  		
    	}
        
    }
}
