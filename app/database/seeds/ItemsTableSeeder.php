<?php 

class ItemsTableSeeder extends Seeder {
	public function run() {
		DB::table('items')->delete();

		$items = array(
			array(
				'owner_id' => 1,
				'name' => 'Pick up milk',
				'done' => false
				),
			array(
				'owner_id' => 1,
				'name' => 'Pick up water',
				'done' => true
				),
			array(
				'owner_id' => 2,
				'name' => 'Pick up milk',
				'done' => false
				),
			array(
				'owner_id' => 2,
				'name' => 'Pick up water',
				'done' => true
				)
			);


		DB::table('items')->insert($items);
	}	
}