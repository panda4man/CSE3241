<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PublishersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('publishers')->delete();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Publisher::create([
				'name' => $faker->name(),
				'address' => $faker->streetAddress
			]);
		}
	}

}