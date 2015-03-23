<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ShoppingCartsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('shopping_cart')->delete();
		$users = User::all()->lists('id');
		foreach(range(1, 5) as $index)
		{
			DB::table('shopping_cart')->insert([
				'user_id' => $faker->randomElement($users),
				'purchase_status' => $faker->word,
				'purchase_date' => $faker->dateTime()
			]);
		}
	}
}