<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;



class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        $this->call('ContentTableSeeder');
        $this->call('ContentMetaTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('ZookeeperTableSeeder');
		$this->call('GiraffeTableSeeder');

	}

}
