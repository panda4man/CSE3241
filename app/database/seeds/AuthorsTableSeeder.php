<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AuthorsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('authors')->delete();
		$faker = Faker::create();
		$publishers = Publisher::all()->lists('id');
		foreach(range(1, 5) as $index)
		{
			Author::create([
				'published_name' => $faker->name(),
				'publisher_id' => $faker->randomElement($publishers),
				'first_name' => $faker->firstName(),
				'middle_name' => $faker->firstName(),
				'last_name' => $faker->lastName,
				'genre' => $faker->word
			]);
		}
	}
}