<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		$this->call('BooksTableSeeder');
		$this->call('PublishersTableSeeder');
		$this->call('AuthorsTableSeeder');
		$this->call('WrittenByTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ShoppingCartsTableSeeder');
		$this->call('ContainsTableSeeder');
		$this->call('CommentOnTableSeeder');
		$this->call('WorksForTableSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
