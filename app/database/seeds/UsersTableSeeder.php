<?php 

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'name' => 'Admin',
				'password' => Hash::make('admin'),
				'email' => 'example@example.com'
				)
			);


		DB::table('users')->insert($users);
	}
}