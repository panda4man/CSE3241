<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdminUsersTableSeeder extends Seeder {

	public function run()
	{
		$admin_users = DB::table('admin_users');
		
		$admin_users->insert([
			'id' => 1,
			'admin_id' => DB::table('users')->where('username', '=', 'admin')->pluck('id')
		]);
	}

}