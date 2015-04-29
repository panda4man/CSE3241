<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		$admin = Role::create([
			'name' => 'Admin'
		]);

		Role::create([
			'name' => 'Customer'
		]);

		$andrew = User::where('username', 'aclinton')->first();
		$andrew->attachRole($admin);
	}

}