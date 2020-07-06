<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('author')->insert([
				'nickname'     => 'A1',
				'fullname'     => 'TRAN VAN A',
				'address'      => 'Ha Noi',
				'email'        => 'a@gmail.com',
				'phone_number' => '123123',
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => date('Y-m-d H:i:s')
			]);

		DB::table('author')->insert([
				'nickname'     => 'A2',
				'fullname'     => 'TRAN VAN B',
				'address'      => 'Ha Noi',
				'email'        => 'b@gmail.com',
				'phone_number' => '123123',
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => date('Y-m-d H:i:s')
			]);
	}
}
