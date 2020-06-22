<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$timestamp = date('Y-m-d H:i:s');
		// $this->call(UsersTableSeeder::class);
		// \DB::table('students')->insert([
		// 		'fullname'   => 'TRAN VAN A',
		// 		'age'        => 12,
		// 		'address'    => 'Nam Dinh',
		// 		'created_at' => $timestamp,
		// 		'updated_at' => $timestamp
		// 	]);
		for ($i = 0; $i < 50; $i++) {
			\DB::table('students')->insert([
					'fullname'   => 'TRAN VAN '.$i,
					'age'        => 12+$i,
					'address'    => 'Nam Dinh '.$i,
					'created_at' => $timestamp,
					'updated_at' => $timestamp
				]);
		}
	}
}
