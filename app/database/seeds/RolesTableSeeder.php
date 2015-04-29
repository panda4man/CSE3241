<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		$admin = Role::create([
			'name' => 'Admin'
		]);

		$customer = Role::create([
			'name' => 'Customer'
		]);

		$users = User::all();

		foreach($users as $user){
			if($user->username == 'aclinton'){
				$user->attachRole($admin);
			} else {
				$user->attachRole($customer);
			}
		}
	}

}