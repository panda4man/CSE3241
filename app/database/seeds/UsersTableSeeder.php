<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('users')->delete();
		foreach(range(1, 19) as $index)
		{
			User::create([
				'username' => $faker->userName,
				'name' => $faker->name(),
				'email' => $faker->freeEmail,
				'password' => $faker->word,
				'address' => $faker->streetAddress
			]);
		}
		User::create(array(
			"username" => "aclinton",
			'name' => "Andrew Clinton",
			'email' => 'aclinton@anecka.com',
			'password' => 'password',
			'address' => '1504 Thurell Rd. Columbus Ohio'
		));
		User::create(array(
			'username' => 'admin',
			'name' => 'The Administrator',
			'email' => 'admin@book-store.dev',
			'password' => 'password',
			'address' => '123 Fake Street, Columbus Ohio'
		));
	}

}