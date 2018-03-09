<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$role_admin     = Role::where( 'name', 'employee' )->first();
		$role_moderator = Role::where( 'name', 'manager' )->first();
		$role_customer  = Role::where( 'name', 'manager' )->first();

		$admin           = new User();
		$admin->name     = 'Admin Name';
		$admin->email    = 'admin@example . com';
		$admin->password = Hash::make('secret');
		$admin->save();
		$admin->roles()->attach( $role_admin );
		$moderator           = new User();
		$moderator->name     = 'Moderator Name';
		$moderator->email    = 'moderator@example . com';
		$moderator->password = Hash::make('secret');
		$moderator->save();
		$moderator->roles()->attach( $role_moderator );
		$customer           = new User();
		$customer->name     = 'Customer Name';
		$customer->email    = 'customer@example . com';
		$customer->password = Hash::make('secret');
		$customer->save();
		$customer->roles()->attach( $role_customer );
	}
}
