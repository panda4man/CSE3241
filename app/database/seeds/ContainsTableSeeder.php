<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContainsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$contains = DB::table('contains');
		$contains->delete();
		$books = Book::all()->lists('id');
		$carts = DB::table('shopping_cart')->lists('id');
		foreach(range(1, 5) as $index)
		{
			$contains->insert([
				'book_id' => $faker->randomElement($books),
				'cart_id' => $faker->randomElement($carts),
				'quantity' => $faker->randomDigit
			]);
		}
	}

}