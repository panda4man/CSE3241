<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WorksForTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$works_for = DB::table('works_for');
		$works_for->delete();

		$authors = Author::all()->lists('id');
		$publishers = Publisher::all()->lists('id');
		foreach(range(1, 20) as $index)
		{
			$works_for->insert([
				'author_id' => $faker->randomElement($authors),
				'publisher_id' => $faker->randomElement($publishers)
			]);
		}
	}

}