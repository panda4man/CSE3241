<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentOnTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$comment = DB::table('comments');
		$comment->delete();
		$books = Book::all()->lists('id');
		$users = User::all()->lists('id');
		foreach(range(1, 1000) as $index)
		{
			$comment->insert([
				'book_id' => $faker->randomElement($books),
				'user_id' => $faker->randomElement($users),
				'utc_time' => $faker->dateTime(),
				'title' => $faker->sentence(3),
				'rating' => $faker->numberBetween(0,5),
				'text' => $faker->text(255)
			]);
		}
	}

}