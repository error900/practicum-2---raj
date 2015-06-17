<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TableSeed1');
		$this->call('TableSeed2');
		$this->call('TableSeed3');
		$this->call('TableSeed4');
	}

}
