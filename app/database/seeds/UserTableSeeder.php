//app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();
		User::create(array(
			'name' => 'Andrew Clinton',
			'username' => 'aclinton',
			'email' => 'aclinton@anecka.com',
			'password' => Hash::make('password'),
		));
		User::create(array(
			'name' => 'Don Herre',
			'username' => 'aclinton',
			'email' => 'don.herre@gmail.com',
			'password' => Hash::make('password'),
		));
		User::create(array(
			'name' => 'Tyler Rasor',
			'username' => 'aclinton',
			'email' => 'rasor.tyler@gmail.com',
			'password' => Hash::make('password'),
		));
	}
}