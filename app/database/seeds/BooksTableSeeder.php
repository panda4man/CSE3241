<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder {

	public function run()
	{	
		//remove all rows
		DB::table('books')->delete();

		//create faker handle
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Book::create(array(
				'isbn' => $faker->unique()->word,
				'category' => $faker->word,
				'name' => $faker->word,
				'year' => $faker->dateTime(),
				'title' => $faker->word,
				'format' => $faker->word,
				'language' => $faker->word,
				'edition' => $faker->word,
				'price' => $faker->randomFloat(2),
				'stock' => $faker->randomDigit
			));
		}
	}

}