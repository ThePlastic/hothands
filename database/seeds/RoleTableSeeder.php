<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$role_admin              = new Role();
		$role_admin->name        = 'admin';
		$role_admin->description = 'God User';
		$role_admin->save();
		$role_moderator              = new Role();
		$role_moderator->name        = 'moderator';
		$role_moderator->description = 'Moderator User';
		$role_moderator->save();
		$role_customer              = new Role();
		$role_customer->name        = 'customer';
		$role_customer->description = 'Customer User';
		$role_customer->save();
	}
}
