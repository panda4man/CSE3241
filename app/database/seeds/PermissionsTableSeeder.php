<?php

class PermissionsTableSeeder extends Seeder {

	public function run()
	{
		$manageBooks = Permission::create([
			'name' => 'manage_books',
			'display_name' => 'Manage Books'
		]);

		$admin = Role::where('name', 'Admin')->first();
		$admin->perms()->sync(array($manageBooks->id));
	}

}