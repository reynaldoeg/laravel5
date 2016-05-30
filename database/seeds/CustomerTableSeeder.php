<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// require the Faker autoloader (https://github.com/fzaninotto/Faker)
use Vendor\fzaninotto\faker\src\Faker\autoload;

class CustomerTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();

		for ( $i = 1 ; $i <= 10 ; $i++ ) {
			DB::table('customers')->insert([
				'name' 				=> $faker->name,
				'address' 		=> $faker->address,
				'telephone' 	=> $faker->phoneNumber,
				'email' 			=> $faker->email,
				'created_at' 	=> date("Y-m-d H:i:s"),
				'updated_at' 	=> date("Y-m-d H:i:s")
			]);
		}

	}

}
