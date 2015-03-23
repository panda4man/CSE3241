<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WrittenByTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$written_by = DB::table('written_by');
		$written_by->delete();

		$books = Book::all()->lists('id');
		$authors = Author::all()->lists('id');
		foreach(range(1, 20) as $index)
		{
			$written_by->insert([
				'book_id' => $faker->randomElement($books),
				'author_id' => $faker->randomElement($authors)
			]);
		}
	}

}